<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Traits\CartTrait;
class CartController extends Controller
{
    use CartTrait;


    public function productlist(){
        $user_id = auth('user')->user()->id;
        $products = Cart::mycartList($user_id);
         return view('site.pages.user.wishlist')->with(['products'=>$products]);

    }



    public function addtocart(Request $request){

        $quantity = $request->quantity;
        $productkey = $request->productkey ;

        $data=[
            'user_id' => auth('user')->id(),
            'quantity' =>$quantity,
            'product_key' =>$productkey
        ];
        $hasthisProduct = $this->hasProductinCart($productkey,auth('user')->id());

        if ( $hasthisProduct == null ){
            //sebette meshul yoxdursa elave edilir
          $save = Cart::store($data);
            if ($save ){
                return ['message' =>'Bu məhsul səbətə əlavə edili'];
            }
        }else{
            //sebette meshul varsa quantity update edilir

            $data=[
                'quantity' =>$hasthisProduct->quantity + $quantity,
            ];

           $update = Cart::updateQuantity($hasthisProduct->id,$data);
            if ($update){
                return ['message' =>'Səbəttəki bu məhsulun sayı artırıldı'];
            }

        }


    }
}
