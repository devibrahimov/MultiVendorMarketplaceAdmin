<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{


    public function profil(Request $request)
    {

         return view('site.pages.shop.profil');

    }



    public function edit()
    {
        auth('shop')->user()->id;
      return view('site.pages.shop.profil');

    }




}
