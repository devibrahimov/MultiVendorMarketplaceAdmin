<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function userprofil(Request $request){
        return view('site.pages.user.profil');
    }

    public function  reset(Request $request){
        return view('site.pages.user.reset');
    }


}
