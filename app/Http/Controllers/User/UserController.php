<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function userprofil(Request $request){
        return view('site.pages.user.profil');
    }

    public function  reset(Request $request){
        return view('site.pages.user.reset');
    }
}
