<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductStatistics;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function allproducts(){
        $products = Product::where('access',1)
                    ->orderBy('id','DESC')
                    ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price'])
                    ->with('hasWish')
                    ->paginate(20);
         return view('site.pages.general.productsListPage',compact(['products']));
    }

    public function productdetail(Request $request){
        $product = Product::getFindProduct($request->key);
        $statistic = ProductStatistics::firstOrCreate(['product_id' => $product->id]);
        $statistic->hit += 1 ;
        $statistic->save();

        $similarProducts =Product::getSimilarProducts($product->category_id);

       if ($product ==null or $product == false or $product == false){
           return redirect()->route('site.products');
       }else{
           return view('site.pages.general.productDetail',compact(['product','similarProducts']));
       }

    }

    public function trend(){
        $products = Product::join('product_statistics','products.id','=','product_statistics.product_id')
            ->orderBy('hit','DESC')
            ->with('hasWish')
            ->paginate(20);
        return view('site.pages.general.productsListPage', compact( 'products'));
    }




    public function categoryProducts($slug){

        $category = Category::where('slug',$slug)->select('id')->first();

        $products = Product::where('category_id','=',$category->id)
            ->join('product_statistics','products.id','=','product_statistics.product_id')
            ->orderBy('hit','DESC')
            ->with('hasWish')
            ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price'])
            ->paginate(20);

        return view('site.pages.general.productsListPage', compact( 'products'));
    }



    public function search(Request  $request){
        $search = $request->input('search');
        $products = Product::where('name','LIKE',"%{$search}%")
                            ->orWhere('description','LIKE',"%{$search}%")
                            ->where('access',1)
                            ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price'])
                            ->with('hasWish')
                            ->paginate(20);

        return view('site.pages.general.productsListPage', compact('products'));

    }

    public function searchedProducts(){

        $products = Product::inRandomOrder()
                            ->where('access',1)
                            ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price'])
                            ->with('hasWish')
                            ->paginate(15);

        return view('site.pages.general.productsListPage', compact('products'));

    }

    public function selectedProducts(){

        $products = Product::inRandomOrder()
                            ->join('product_statistics','products.id','=','product_statistics.product_id')
                            ->where('hit','>',0)
                            ->where('access',1)
                            ->orderBy('hit','DESC')
                            ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price'])
                            ->with('hasWish')
                            ->paginate(15);

        return view('site.pages.general.productsListPage', compact('products'));

    }



    public function filter(Request $request){
        $products = Product::filter()->where('access',1)
            ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price'])
            ->with('hasWish')
            ->paginate(20);
        return view('site.pages.general.productsListPage', compact('products'));

    }


}
