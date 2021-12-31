<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if (\auth('administrator')->check()){
            return redirect()->route('dashboard');
        }else{
            return view('administrator.login');
        }
    }

    public function logincontrol(Request $request){
        $this->validate($request,[
            'email'=>'required|email|max:80',
            'password'=>'required|max:80'
        ],[
            'email.required'=>'Email alanını boş bırakamazsınız',
            'email.email'=>'Email alanını email yazılım kurallarına uymuyor',
            'password.required'=>'Email alanını boş bırakamazsınız'
        ]);

        if ( auth('administrator')->attempt([
            'email'=>$request->email,
            'password'=> $request->password,
            'aprovel'=> 1,
        ])){
            request()->session()->regenerate();
            return redirect()->intended(route('dashboard')) ;
        }else{
            $errors = ['email'=>'Hatalı Giriş'];
            return back()->withErrors($errors);
        }

    }

    public function logout(){
        auth()->logout();
        \request()->session()->flush();
        \request()->session()->regenerate();
        return redirect()->route('dashboard');
    }

}
