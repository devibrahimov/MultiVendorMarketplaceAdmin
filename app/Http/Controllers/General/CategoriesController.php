<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPUnit\Exception;

class CategoriesController extends Controller
{
    public function index(){
        return view('pages.category.categories');
    }
    public function subcategories(){
        return view('pages.category.sub_categories');
    }



    public function store($parentid=null,Request $request){


        try{
            $icon= null;
            $image = null;
            $icon = $request->file('icon');
            $image = $request->file('image');
            $path = "/photos/site/categories";
            $imagepath = public_path() . $path;

            if ($icon) {

                $newimagename = env('APP_NAME') .Str::slug($request->name) . '.' . $icon->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $icon->move($imagepath, $newimagename);
                $icon = $imageurl;

            }

            if ($image) {
                $newimagename = env('APP_NAME').Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $image->move($imagepath, $newimagename);
                $image = $imageurl;

            }

            $data = [
                'parent_id' => $parentid,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
                'icon' =>$icon,
                'image' =>$image ,
            ];
            $category= new Category();
            $category->insert($data);

            $feedbackdata = ['title' => 'Uğurlu !',
                'message' => 'Sayt məlumatları uğurla qeyd edildi',
                'type' => 'success', ];
            return back()->with('feedback', $feedbackdata);
        }catch (\Exception $exception){
            $feedbackdata = ['title' => 'Uğursuz !',
                'message' => 'Sayt məlumatları yaddaşa yazılarkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'type' => 'danger'];
            return back()->with('feedback', $feedbackdata);
        }




    }


}
