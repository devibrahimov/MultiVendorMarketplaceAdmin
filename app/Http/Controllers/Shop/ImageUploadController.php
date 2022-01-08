<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
     public function imageupload(Request $request){

         $files = request()->file('file');
         foreach ($files as $file){
             //$this->validate(request(), ['file' => 'image|mimes:jpg,jpeg,png']);
             $filename = $file->getClientOriginalName();
             $imageDestinationPath = 'uploads/';
             $postImage = rand(0,12312312312). "." . $file->getClientOriginalExtension();
             $file->move($imageDestinationPath, $postImage);

             echo $filename ;

         }
     }
}
