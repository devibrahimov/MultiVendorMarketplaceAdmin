<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{

    protected $table ='user_wishlist';
    protected $guarded = [] ;

    public function product(){
        return $this->hasMany( Product::class ,'key','product_key');
    }
    public static function createnew(string $key,$user_id){

        try {
        $data = [
            'user_id' => $user_id ,
            'product_key' => $key ,
        ] ;
       $create =  Wish::create($data);
       if ($create){
           return true;
       }else{
           return false;
       }
          }catch (\Exception $e){

            return $e ;

        }
    }

    public static function removeWish($wish_id){

            $item =  Wish::destroy($wish_id);

            if ($item){
                return 'Bəyəndiklərimdən çıxardıldı';
            }else{
                return false;
            }

    }


    public static function hasWish(string $key,$user_id){
        $data = [
            'user_id' => $user_id ,
            'product_key' => $key ,
        ] ;
      return   Wish::where($data)->select('id')->first();
    }

    public static function myWishList($user_id){
        return   Wish::where('user_id',$user_id)->get();
    }
}
