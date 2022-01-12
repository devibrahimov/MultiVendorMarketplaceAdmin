<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\CorporativeRequest;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\CorporativePages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CorporativePagesController extends Controller
{
    public function  index(){
         $corporatives = CorporativePages::all();
        return view('administrator.pages.corporative.index',compact('corporatives'));
    }
    public function store(CorporativeRequest $request){
        try{


            $image = $request->file('image');
            $path = "/photos/site/corporative";
            $imagepath = public_path() . $path;



            if ($image) {
                $newimagename = env('APP_NAME').Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $image->move($imagepath, $newimagename);
                $image = $imageurl;
            }

            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'slug' => Str::slug($request->title),
                'image' =>$image ,
            ];

            $corporative= new CorporativePages();
            $corporative->create($data);

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

    }//end store function

    public function edit(int $id){
        $corporative = CorporativePages::find($id) ;
        $corporatives = CorporativePages::all();
        return view('administrator.pages.corporative.edit',compact(['corporative','corporatives']));
    }
    public function update(Request $request , int $id){
        try{

            $image = $request->file('image');
            $path = "/photos/site/corporative";
            $imagepath = public_path() . $path;



            if ($image) {
                $newimagename = env('APP_NAME').Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $image->move($imagepath, $newimagename);
                $image = $imageurl;
            }

            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'slug' => Str::slug($request->title),
                'image' =>$image ,
            ];
            $corporative=   CorporativePages::find($id);
            $corporative->update($data);

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
    public function corporativedelete($id){
        try {

            CorporativePages::find($id)->delete();

            $feedbackdata = ['title' => 'Uğurlu !',
                'message' => 'Sozlesme uğurla silindi',
                'type' => 'success', ];
            return back()->with('feedback', $feedbackdata);
        }catch (\Exception $exception){
            $feedbackdata = ['title' => 'Uğursuz !',
                'message' => 'Sozlesme silinərkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'type' => 'danger'];
            return back()->with('feedback', $feedbackdata);
        }
    }//end delete function

}
