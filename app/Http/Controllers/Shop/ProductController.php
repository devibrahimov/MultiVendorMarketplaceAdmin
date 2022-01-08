<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create(){
        return view('site.pages.shop.product.create');
    }

    public function store(Request $request){
        return $request->all();
    }
}
