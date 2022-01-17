<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wish;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist(){
        return view('site.pages.user.wishlist');
    }


    public function wishproduct(Request $request){

        if (auth('user')->user()->id){
           // echo auth('user')->user()->name ;
            $product = Product::getFindProductID($request->id);

            $wish =[
                'user_id' => auth('user')->user()->id,
                'product_id' => $product['id'],
            ];

           $haswish= Wish::where('user_id',auth('user')->user()->id)
                ->where('product_id' , $product['id'])
                ->first();

              if($haswish ==null){
                 $created = Wish::create($wish);
                 if ($created){
                     return 'created';
                 }else{
                     return  false ;
                 }

              }else{
                  $delete= Wish::where(  'user_id',auth('user')->user()->id)
                      ->where('product_id' , $product['id'])
                      ->delete();

                  return 'removed';
              }


        }else{

         return  false ;
        }

    }



}
