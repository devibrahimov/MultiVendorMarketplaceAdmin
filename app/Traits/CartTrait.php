<?php

namespace App\Traits ;

use App\Models\Cart;
trait CartTrait
{

     public function hasProductinCart( string $key,int $user_id){
       return Cart::where('product_key',$key)->where('user_id',$user_id)->first();
    }




}
