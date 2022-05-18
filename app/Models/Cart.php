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

    public static function store($data){
       return Cart::create($data);
    }

}
