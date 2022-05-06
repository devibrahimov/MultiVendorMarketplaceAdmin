<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function userprofil(Request $request){
        return view('site.pages.user.profil');
    }

    public function  reset(Request $request){
        return view('site.pages.user.reset');
    }
    public function changeAvatar(Request $request){


        $file=$request->image;

        $filename = $file->getClientOriginalName();
        $imageDestinationPath = 'uploads/users/';
        $postImage = rand(0,12312312312). "." . $file->getClientOriginalExtension();
        $file->move($imageDestinationPath, $postImage);
        $user =  DB::table('users')
            ->where('id',auth('user')->user()->id)
            ->update(['avatar' => '/'.$imageDestinationPath.$postImage]);
        return true;


    }


}
