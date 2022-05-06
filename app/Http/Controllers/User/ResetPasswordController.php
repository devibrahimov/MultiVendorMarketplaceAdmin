<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{

    public function showForgetPasswordForm()
    {
        return view('site.pages.user.reset');
    }

    public function showResetPasswordForm() {
        return view('site.pages.user.reset');
    }

    public function submitResetPasswordForm(Request $request)
    {
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'confirmed|min:6',
        ]);

        $user = User::find(\auth('user')->id())  ;
        if(Hash::check($request->oldpassword, $user->password)){
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();
        }

        return back();
    }

}
