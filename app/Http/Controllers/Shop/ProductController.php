<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index(){
        $products = Product::where('shop_id',auth('shop')->user()->id)->paginate(3); //15;
        return view('site.pages.shop.product.index',compact(['products']));
    }

    public function create(){
        return view('site.pages.shop.product.create');
    }



    public function store(Request $request){
     // return $request->all();


        $save = Product::createProduct($request);


        if ($save){
            return true ;
        }else{
            return  false ;
        }




    }


    public function edit($id){
        return view('site.pages.shop.product.edit');
    }


    public function active(Request $request){
        $id = $request->id;
        $status = $request->status;
        var_dump($status);
       $product =  Product::find($id);

       if ( $status == "true" ){
           $status = 1;
       }  if ( $status == "false" ){
           $status = 0;
       }

       $product->access = $status;
        $product->save();


    }

}
