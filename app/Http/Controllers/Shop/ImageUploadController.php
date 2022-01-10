<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
     public function imageupload(Request $request){

         $files = request()->file('file');
         $filesMeatdata = json_decode($request->filesMeatdata);
         $responsedata = [] ;
         foreach ($files as $key => $file){

             //$this->validate(request(), ['file' => 'image|mimes:jpg,jpeg,png']);

             $filename = $file->getClientOriginalName();
             $imageDestinationPath = 'uploads/';
             $postImage = rand(0,12312312312). "." . $file->getClientOriginalExtension();

             if($filename == $filesMeatdata[$key]->name){

                 $file->move($imageDestinationPath, $postImage);

                 $response = [
                     'index' => $filesMeatdata[$key]->index,
                     'name' =>$filesMeatdata[$key]->name,
                     'newname' => $postImage,
                     'link' => '/'.$imageDestinationPath.$postImage,
                 ];
                 array_push($responsedata,$response);
             }

         }

         return json_encode($responsedata);
     }
}
