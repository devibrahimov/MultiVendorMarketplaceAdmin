<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ShopRequest;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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


    public function login(Request $request){

        $validator = Validator::make($request->all(),[
            'email'=>'required|email|max:70',
            'password'=>'required|string|max:30'
        ]);
        if($validator->fails()){
            return response()->json([
                'message'=>$validator->errors()
            ],422);
        }
        $shop=Shop::where('email',$request->email)->first();
        if($shop){
            if(Hash::check($request->password,$shop->password)){
                $token = $shop->createToken('shop')->plainTextToken;
                return response()->json([
                    'message'=>'success',
                    'data'=>$shop,
                    'token'=>$token
                ],201);
            }
            return response()->json([
                'message'=>'Şifrə yanlışdır',
            ]);
        }
        return response()->json([
            'message'=>'E-Poçt adreisniz yanlışdır'
        ]);
    }

    public function shop(Request $request)
    {
        return response()->json([
            'message'=>'User melumatlari',
            'data'=> $request->user()
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();//laravel sanctum sehifesinden geldi
        return response()->json([
            'message'=>'Logout'
        ]);
    }


}
