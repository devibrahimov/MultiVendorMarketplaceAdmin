<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function allproducts(){
        $products = Product::where('access',1)->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price',
        'price',])->get();
         return view('site.pages.general.productsListPage',compact(['products']));
    }

    public function productdetail(Request $request){
        $product = Product::getFindProduct($request->key );
       if ($product ==null or $product == false or $product == false){
           return redirect()->route('site.products');
       }else{
           return view('site.pages.general.productDetail',compact(['product']));
       }

    }
}
