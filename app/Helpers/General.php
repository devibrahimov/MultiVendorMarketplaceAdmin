<?php

use App\Models\Setting;


function setting(){
    return Setting::first();
}


function thisproductcategorylist($category_id,$list = ''){

    $category = \App\Models\Category::where('id',(int) $category_id)->first();

    $list .= '<li class="list-inline-item"> '.$category->name.' </li> ' ;

    if($category->parent_id != null){

        thisproductcategorylist($category->parent_id ,$list);

    }else{
        echo $list ;
    }




}
