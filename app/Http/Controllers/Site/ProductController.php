<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductStatistics;
use App\Models\Setting;
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
    public function trend(){

        $products = ProductStatistics::where('hit','>',6)
            ->join('products','products.id','=','product_statistics.product_id')
            ->where('access',1)
            ->get();

        return view('site.pages.general.productsListPage', compact( 'products'));
    }


    public function search(Request  $request){

        $products = Product::where('name','ILIKE','%'.$request->name.'%')->get();
        return view('site.pages.general.productsListPage', compact('products'));

    }
}
