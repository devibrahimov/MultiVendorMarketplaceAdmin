<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    public function register(UserRegisterRequest $request){

            try{

                $email  = $request->email;
                $password =$request->password;

                $user = new User();
                $user->email  = $email;
                $user->password = Hash::make($password);
                $user->save();
                $token = $user->createToken('user', ['server:update'])->plainTextToken;
                $response = [
                    'status' =>1,
                    'data' => $user,
                    'token' =>$token,
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


    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|max:70',
            'password'=>'required|string|max:30'
        ]);
        if($validator->fails()){
            return response()->json([
                'message'=>$validator->errors()
            ],422);
        }
        $shop=User::where('email',$request->email)->first();
        if($shop){
            if(Hash::check($request->password,$shop->password)){
                $token = $shop->createToken('shop')->plainTextToken;
                return response()->json([
                    'message'=>'success',
                    'data'=>$shop,
                    'token'=>$token
                ],201);
            }
            return response()->json([
                'message'=>'Şifrə yanlışdır',
            ]);
        }
        return response()->json([
            'message'=>'E-Poçt adreisniz yanlışdır'
        ]);
    }


    public function userdata(Request $request){
        return response()->json([
            'message'=>'User melumatlari',
            'data'=> $request->user()
        ]);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();//laravel sanctum sehifesinden geldi
        return response()->json([
            'message'=>'Logout'
        ]);
    }
}
