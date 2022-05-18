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
        return $this->hasMany(__CLASS__, 'id','parent_id')->with('subCategories');
    }

    public static function  parent(){
        return (new Category)->belongsTo(__CLASS__,  'id','parent_id')->withDefault();
    }
    public   function children() {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id') ;
    }
    public static function getcategories(){
        return Category::where('parent_id',null)->with('subCategories')->get();
    }
}
