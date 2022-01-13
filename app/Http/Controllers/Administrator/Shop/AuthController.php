<?php

namespace App\Http\Controllers\Administrator\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function newregistershops(){
        $shops = Shop::where('aprovel',0)->paginate(30);
        return view('administrator.pages.shop.index',compact('shops'));
    }
}
