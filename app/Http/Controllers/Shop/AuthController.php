<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ShopRequest;
use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{

    public function register(){
        $categories = Category::where('parent_id',null)->get();
          return view('site.pages.shop.register',compact('categories'));
    }

    public function registerstore(ShopRequest $request){

           $response = Shop::createnewShop($request);

           if ($response['status'] == 1){
               return redirect()->route('home');
           }else{
               return redirect()->route('shop.register');
           }
    }


    public function login(){
        if (Auth::guard('shop')->check())
            return redirect()->route('shop.profil');


        return view('site.pages.shop.login');
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
        if ( auth('shop')->attempt([
            'email'=>$request->email,
            'password'=> $request->password,
            'aprovel'=> 1,
        ])){
            request()->session()->regenerate();
            return redirect()->intended(route('shop.profil')) ;
        }else{
            $errors = ['email'=>'Hatalı Email'];
            return back()->withErrors($errors);
        }
    }


    public function logout(Request $request)
    {
        auth()->guard('shop')->logout();
        \request()->session()->flush();
        \request()->session()->regenerate();
        return redirect()->route('home');
    }


    public function changepassword(){
        return view('site.pages.shop.profil.change_password');
    }


    public function resetpassword(Request $request){

        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'confirmed|min:6',
        ]);

        $user = Shop::find(\auth('shop')->id())  ;
        if(Hash::check($request->oldpassword, $user->password)){
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();
        }

        return back();
    }

}
