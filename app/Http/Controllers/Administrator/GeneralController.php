<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
   public function dashboard(){
       return view('administrator.pages.dashboard');
   }

}
