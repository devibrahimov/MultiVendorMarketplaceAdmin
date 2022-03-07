<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contract;
use App\Models\CorporativePages;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Shop;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
       $athomeCategory = Category::where('athome',1)->first();
        $catlist= [];
        foreach($athomeCategory->subCategories as $c){
            array_push($catlist , $c->id);
        }
        $atHomeCatProducts = Product::whereIn('category_id',$catlist)
            ->where('access',1)
//            ->join('products','products.id','=','product_statistics.product_id')
//            ->where('hit','>',0)
//            ->orderBy('hit','DESC')
            ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price',])
            ->take(6)
            ->get();

        $atHomeRandProducts = Product::inRandomOrder()
           // ->join('product_statistics','products.id','=','product_statistics.product_id')
            ->where('access',1)
            ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price',])
            ->take(9)->get();

        return view('site.pages.general.home',compact(['atHomeCatProducts','athomeCategory','atHomeRandProducts']));
    }


    public function corporativ(Request $request){
        $slug = $request->slug ;

        $corporative = CorporativePages::where('slug',$slug)->first();
        return view('site.pages.general.corporative',compact(['corporative']));
    }

    public function contract(Request $request){
        $slug = $request->slug ;

        $contracts = Contract::where('slug',$slug)->first();
        return view('site.pages.general.contract',compact('contracts'));
    }

    public function shops(){
        $shops = Shop::join('shop_information','shops.id','=','shops_information.shop_id')
            ->where('approvel',1)
            ->select('shop_information.work_time','shops.shopname','shops.shopcategory','shops.shop_serialnumber')
            ->paginate(10);
        return view('site.pages.general.shops',compact(['shops']));
    }

}
