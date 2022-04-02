<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'categories';
    protected $dates = ['deleted_at'];
    protected $guarded = [] ;
    public function  subCategories(){
        return $this->hasMany(__CLASS__, 'parent_id');
    }

    public function  parent(){
        return $this->belongsTo(__CLASS__, 'parent_id')->withDefault();
    }


    public static function getcategories(){
        return Category::where('parent_id',null)->get();
    }
}
