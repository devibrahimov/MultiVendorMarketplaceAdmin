<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index(){
        return view('site.pages.shop.product.index');
    }
    public function create(){
        return view('site.pages.shop.product.create');
    }

    public function store(Request $request){

        $files = request()->file('file');
        foreach ($files as $file){
            //$this->validate(request(), ['file' => 'image|mimes:jpg,jpeg,png']);
            $filename = $file->getClientOriginalName();
            $imageDestinationPath = 'uploads/';
            $postImage = rand(0,12312312312). "." . $file->getClientOriginalExtension();
            $file->move($imageDestinationPath, $postImage);

          echo $filename ;

        }

    }
}
