<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserRegisterRequest;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{


    public function register(){
            $regions = Region::where('parent_id',null)->get();
          return view('site.pages.user.register',compact(['regions']));
    }

    public function registerstore(UserRegisterRequest $request){

            try{

                $email  = $request->email;
                $password =$request->password;
                $name =$request->name;
                $surname =$request->surname;
                $region_id =$request->region_id;
                $number =$request->number;

                $user = new User();
                $user->email  = $email;
                $user->name  = $name;
                $user->surname  = $surname;
                $user->region_id  = $region_id;
                $user->number  = $number;
                $user->password = Hash::make($password);
                $user->save();

                $response = [
                    'status' =>1,
                    'data' => $user,
                    'message'=> 'Təbriklər Qeydiyyatınız uğurla başa çatmışdır.Artıq Sistemimizdə Sizində profiliniz var'
                ];

                return $response;
            }

            catch (\Exception $e){

                $response = [
                    'status' => 0,
                    'data' => $user,
                    'token' => null,
                    'message' =>$e->getMessage()
                ];
                return $response;
            }

    }



    public function login(){
        if (Auth::guard('user')->check())
            return redirect()->route('user.profil');

        return view('site.pages.user.login');
    }

    public function logincontrol(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|max:70',
            'password'=>'required|string|max:30'
        ]);
        if($validator->fails()){
            return response()->json([
                'message'=>$validator->errors()
            ],422);
        }
        if ( auth('user')->attempt([
            'email'=>$request->email,
            'password'=> $request->password,
            'aprovel'=> 1,
        ])){
            request()->session()->regenerate();
            return redirect()->intended(route('user.profil')) ;
        }else{
            $errors = ['email'=>'Hatalı Giriş'];
            return back()->withErrors($errors);
        }
    }


    public function userprofil(Request $request){

    }

    public function logout(Request $request){
        auth()->guard('user')->logout();
        \request()->session()->flush();
        \request()->session()->regenerate();
        return redirect()->route('home');
    }
}
