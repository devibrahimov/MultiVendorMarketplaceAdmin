<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $table = 'user_cart';
    protected $guarded = [];
    use HasFactory;


    public static function mycartList($user_id){
        return Cart::where('user_id',$user_id)->with('product')->get();
    }

    public static function store($data){
       return Cart::create($data);
    }


    public static function updateQuantity($id,$data){
       return Cart::where('id',$id )->update($data);
    }

    public function product(){
        return $this->hasMany( Product::class ,'key','product_key');
    }

}
