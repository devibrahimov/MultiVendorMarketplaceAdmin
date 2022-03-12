<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Shop;
use App\Models\Shopİnformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{


    public function profil(Request $request)
    {

         return view('site.pages.shop.profil.profil');

    }



    public function edit()
    {
        $id = auth('shop')->user()->id;
        $categories = Category::where('parent_id',null)->get();
        $shop = Shop::where('id',$id)->leftJoin('shop_information','shops.id','=','shop_information.shop_id')->first();
      return view('site.pages.shop.profil.profiledit',compact(['categories','shop']));

    }


    public function update(Request $request){

       $save =  Shop::updateInformations($request);

       return redirect()->back() ;


    }


    public function changeAvatar(Request $request){


        $file=$request->image;

        $filename = $file->getClientOriginalName();
        $imageDestinationPath = 'uploads/shop/';
        $postImage = rand(0,12312312312). "." . $file->getClientOriginalExtension();
        $file->move($imageDestinationPath, $postImage);
        $shop=  DB::table('shop_information')
            ->where('shop_id',auth('shop')->user()->id)
            ->update(['avatar' => '/'.$imageDestinationPath.$postImage]);
        return true;


    }





}
