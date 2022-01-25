<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductStatistics;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function allproducts(){
        $products = Product::where('access',1)->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price',
        'price',])->get();
         return view('site.pages.general.productsListPage',compact(['products']));
    }

    public function productdetail(Request $request){
        $product = Product::getFindProduct($request->key);


        $statistic = ProductStatistics::firstOrCreate(['product_id' => $product->id]);
        $statistic->hit += 1 ;
        $statistic->save();

       if ($product ==null or $product == false or $product == false){
           return redirect()->route('site.products');
       }else{
           return view('site.pages.general.productDetail',compact(['product']));
       }

    }

    public function trend(){

        $products = ProductStatistics::where('hit','>',0)
            ->orderBy('hit','DESC')
            ->join('products','products.id','=','product_statistics.product_id')
            ->where('access',1)
            ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price',])
            ->get();

        return view('site.pages.general.productsListPage', compact( 'products'));
    }


    public function search(Request  $request){

        $search = $request->input('search');

        $products = Product::where('name','LIKE',"%{$search}%")
                            ->orWhere('description','LIKE',"%{$search}%")
                             ->orWhere('price','LIKE',"%{$search}%")
                             ->orWhere('sale_price','LIKE',"%{$search}%")
                            ->get();
        return view('site.pages.general.productsListPage', compact('products'));

    }
}
