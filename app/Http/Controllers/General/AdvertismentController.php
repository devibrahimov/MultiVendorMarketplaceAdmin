<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\AdvertismentRequest;
use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdvertismentController extends Controller
{
    public function  index(){
         $advertisments = Advertisement::all();
        return view('pages.advertisment.advertisment',compact('advertisments'));
    }
    public function store(AdvertismentRequest $request){
        try{


            $image = $request->file('image');
            $path = "/photos/site/advertisment";
            $imagepath = public_path() . $path;



            if ($image) {
                $newimagename = env('APP_NAME').Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $image->move($imagepath, $newimagename);
                $image = $imageurl;
            }

            $data = [
                'company' => $request->company,
                'url' => $request->url,
                'page' => $request->page,
                'line' => $request->line,
                'type' => $request->type,
                'start_time' => $request->start_time,
                'stop_time' => $request->stop_time,
                'image' =>$image ,
            ];

            $advertisment= new Advertisement();
            $advertisment->create($data);

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
        $advertisment = Advertisement::find($id) ;
        $advertisments = Advertisement::all();
        return view('pages.advertisment.editadvertisment',compact(['advertisment','advertisments']));
    }
    public function update(int $id , Request $request){
        try{

            $image = $request->file('image');
            $path = "/photos/site/advertisment";
            $imagepath = public_path() . $path;



            if ($image) {
                $newimagename = env('APP_NAME').Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $image->move($imagepath, $newimagename);
                $image = $imageurl;
            }

            $data = [
                'company' => $request->company,
                'url' => $request->url,
                'page' => $request->page,
                'line' => $request->line,
                'type' => $request->type,
                'start_time' => $request->start_time,
                'stop_time' => $request->stop_time,
                'image' =>$image ,
            ];
            $advertisment=   Advertisement::find($id);
            $advertisment->update($data);

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
    public function advertismentdelete($id){
        try {

            Advertisement::find($id)->delete();

            $feedbackdata = ['title' => 'Uğurlu !',
                'message' => 'Reklam uğurla silindi',
                'type' => 'success', ];
            return back()->with('feedback', $feedbackdata);
        }catch (\Exception $exception){
            $feedbackdata = ['title' => 'Uğursuz !',
                'message' => 'Reklam silinərkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'type' => 'danger'];
            return back()->with('feedback', $feedbackdata);
        }
    }//end delete function

}
