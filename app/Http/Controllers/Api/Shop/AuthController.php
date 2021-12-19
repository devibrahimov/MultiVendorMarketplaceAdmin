<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ShopRequest;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;
use mysql_xdevapi\Exception;

class AuthController extends Controller
{

    public function register(ShopRequest $request){

           $response = Shop::createnewShop($request);

           if ($response['status'] == 1){
               return response($response,201);
           }else{
               return response($response,200);
           }

    }
}
