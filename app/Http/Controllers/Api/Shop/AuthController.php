<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    public function register(Request $request){

       $shop = new Shop();
       $name  = $request->name;
       $surname  = $request->surname;
       $shopname  = $request->shopname;
       $region_id  = $request->region_id;
       $number  = $request->number ;
       $email  = $request->email ;
       $adress  = $request->adress ;
       $location  =  json_encode(['lat' => $request->lat,'lng' => $request->lng]);
       $work_time = json_encode(['start_time' => $request->start_time,'end_time' => $request->end_time]);
       $shop_serialnumber  = time().rand(10000,99999);
       $avatar = $request->file('avatar');

        if ($avatar) {
            $path = "/photos/magazalar/avatarlar";
            $imagepath = public_path() . $path;
            $newimagename = env('APP_NAME') .Str::slug($request->shopname) . '.' . $avatar->getClientOriginalExtension();
            $imageurl = $path . '/' . $newimagename; //for DB
            $avatar->move($imagepath, $newimagename);
        }else{
            $imageurl = "/photos/defaults/".Str::slug(env('APP_NAME'))."m.jpg";
        }

        $avatar = $imageurl;



         $shop->name  = $name;
         $shop->surname  = $surname;
         $shop->shopname  = $shopname;
         $shop->region_id  = $region_id;
         $shop->number  = $number;
         $shop->email  = $email;
         $shop->adress  = $adress;
         $shop->location  = $location;
         $shop->work_time  = $work_time;
         $shop->avatar  = $avatar;
         $shop->shop_serialnumber  = $shop_serialnumber;



    }
}
