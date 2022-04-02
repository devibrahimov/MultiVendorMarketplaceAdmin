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

    public   function  subCategories(){
        return $this->hasMany(__CLASS__, 'parent_id','id')->select(['id','parent_id','name'])->with('subCategories');
    }

    public  function  parent(){
        return $this->belongsTo(__CLASS__,'parent_id',  'id')->select(['id','parent_id'])->with('parent')->withDefault();
    }
    public   function children() {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id')->with('children')->select(['id','parent_id']) ;
    }
    public static function getcategories(){
        return Category::where('parent_id',null)->select(['id','parent_id','name'])->with('subCategories')->get();
    }


    public static function getcategories(){
        return Category::where('parent_id',null)->get();
    }
}
