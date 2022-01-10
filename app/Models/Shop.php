<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;
    use SoftDeletes;
    protected $table = 'shops';
    protected $dates = ['deleted_at'];
    protected $guarded = [];
    protected $hidden = ['password','email','aprovel'];

   public static function  createnewShop($request){

       try{
           DB::beginTransaction();
        $email  = $request->email;
        $shopname  = $request->shopname;
        $shop_serialnumber  = Str::random(9).time();
        $shopcategory  = $request->shopcategory;
        $password =$request->password;

        $name  = $request->name;
        $surname  = $request->surname;
        $number  = $request->number ;
        $adress  = $request->adress;

        $shop = new Shop();
        $shop->shopname  = $shopname;
        $shop->email  = $email;
        $shop->shopcategory  = $shopcategory;
        $shop->shop_serialnumber  = $shop_serialnumber;
        $shop->password = Hash::make($password);
        $shop->save();

        $data = [
        'shop_id' => $shop->id,
        'name' => $name,
        'surname' => $surname,
        'number' => $number,
        'adress' => $adress
        ];
        DB::table('shop_information')->insert($data);

           DB::commit();
        $token = $shop->createToken('shop', ['server:update'])->plainTextToken;

        $response = [
        'status' =>1,
        'data' => $shop,
        'token' =>$token,
        'message'=> 'Təbriklər Qeydiyyatınız uğurla başa çatmışdır.Artıq Sizində mağazanız var'
        ];

            return $response;
        }

       catch (\Exception $e){
           DB::rollback();
           $response = [
               'status' => 0,
               'data' => $shop,
               'token' => null,
               'message' =>$e->getMessage()
               ];
           return $response;
       }

    }


}
