<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addtocart(Request $request){

        $quantity = $request->quantity;
        $productkey = $request->productkey ;

        $data=[
            'user_id' => auth('user')->id(),
            'quantity' =>$quantity,
            'product_key' =>$productkey
        ];
        Cart::store($data);

    }
}
