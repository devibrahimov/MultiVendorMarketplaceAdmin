<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\SettingRequest;
use App\Models\Setting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Exception;

class SettingController extends Controller
{
    public function index(){
        $setting = DB::table('settings')->first();
        if ($setting == null){
            return view('pages.general.setting');
        }else{
            return view('pages.general.settingedit',compact(['setting']));
        }


    }

    public function store(SettingRequest $request){
        try {
            $logo_colorname= null;
            $logo_blackname= null;
            $logo_whitename= null;
            $faviconname= null;
            $logo_color = $request->file('logo_color');
            $logo_black = $request->file('logo_black');
            $logo_white = $request->file('logo_white');
            $favicon = $request->file('favicon');

            $path = "/photos/site";
            $imagepath = public_path() . $path;
            if ($logo_color) {
                $newimagename = env('APP_NAME') .'-logo' . '.' . $logo_color->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $logo_color->move($imagepath, $newimagename);
                $logo_colorname = $imageurl;

            }

            if ($logo_black) {
                $newimagename = env('APP_NAME').'-logoblack' . '.' . $logo_black->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $logo_black->move($imagepath, $newimagename);
                $logo_blackname = $imageurl;

            }

            if ($logo_white) {
                $newimagename =  env('APP_NAME').'-logowhite' . '.' . $logo_white->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $logo_white->move($imagepath, $newimagename);
                $logo_whitename = $imageurl;
            }


            if ($favicon) {
                $newimagename = env('APP_NAME').'-favicon' . '.' . $favicon->getClientOriginalExtension();
                $imageurl = $path . '/' . $newimagename; //for DB
                $favicon->move($imagepath, $newimagename);
                $faviconname = $imageurl;
            }

            $data = [
                'title' => $request->title,
                'meta_description' => $request->meta_description,
                'meta_tags' => $request->meta_tags,
                'logo_color' =>$logo_colorname ,
                'logo_black' =>$logo_blackname ,
                'logo_white' =>$logo_whitename ,
                'favicon' =>$faviconname
            ];
            $setting= new Setting();
            $setting->insert($data);

            $feedbackdata = ['title' => 'Uğurlu !',
                'message' => 'Sayt məlumatları uğurla qeyd edildi',
                'type' => 'success', ];
            return back()->with('feedback', $feedbackdata);
        }
        catch (Exception $exception){
            $feedbackdata = ['title' => 'Uğursuz !',
                'message' => 'Sayt məlumatları yaddaşa yazılarkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'type' => 'danger'];
            return back()->with('feedback', $feedbackdata);
        }
    }



    public function update(Request $request){

        try {
            $setting= Setting::first();

            $logo_color = $request->file('logo_color');
            $logo_black = $request->file('logo_black');
            $logo_white = $request->file('logo_white');
            $favicon = $request->file('favicon');


            $path = "/photos/site";
            if ($logo_color !=null){
                $request->validate([
                    'logo_color' => 'required|mimes:png|dimensions:max_width=300,max_height=100',
                ],
                [
                    'logo_color.required' => '"Rengli Logo" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
                    'logo_color.mime' => '"Rengli Logo" png formatında logo fayl seçib yükləyin.',
                    'logo_color.dimensions' => '"Rengli Logo" Fayl ölçülər yanlışdır. Genişlik:300px ,Yüksəklik:100px olmalıdır.',
                ]
                );

                if ($logo_color->isValid()) {
                    $newimagename = env('APP_NAME') .'-logo' . '.' . $logo_color->getClientOriginalExtension();
                    $imageurl = $path . '/' . $newimagename; //for DB
                    $imagepath = public_path() . $path;
                    $logo_color->move($imagepath, $newimagename);
                    $setting->logo_color = $imageurl;
                }
            }
            if ($logo_black !=null){
                $request->validate([
                    'logo_black' => 'required|mimes:png|dimensions:max_width=300,max_height=100',
                ],
                [
                 'logo_black.required' => ' "Qara Logo" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
                'logo_black.mime' => '"Qara Logo" png formatında logo fayl seçib yükləyin.',
                'logo_black.dimensions' => '"Qara Logo" Fayl ölçülər yanlışdır. Genişlik:300px ,Yüksəklik:100px olmalıdır.',

                ]);

                if ($logo_black->isValid()) {
                    $newimagename = env('APP_NAME') .'-logoqara' . '.' . $logo_black->getClientOriginalExtension();

                    $imageurl = $path . '/' . $newimagename; //for DB
                    $imagepath = public_path() . $path;
                    $logo_black->move($imagepath, $newimagename);
                    $setting->logo_black = $imageurl;
                }
            }

            if ($logo_white !=null){
                $request->validate([
                    'logo_white' => 'required|mimes:png|dimensions:max_width=300,max_height=100',
                ],
                [
                 'logo_white.required' => '"Ağ Logo" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
                'logo_white.mime' => '"Ağ Logo" png formatında logo fayl seçib yükləyin.',
                'logo_white.dimensions' => '"Ağ Logo" Fayl ölçülər yanlışdır. Genişlik:300px ,Yüksəklik:100px olmalıdır.',

                ]);

                if ($logo_white->isValid()) {
                    $newimagename = env('APP_NAME') .'-logoag' . '.' . $logo_white->getClientOriginalExtension();
                    $imageurl = $path . '/' . $newimagename; //for DB

                    $imagepath = public_path() . $path;
                    $logo_white->move($imagepath, $newimagename);
                    $setting->logo_white = $imageurl;
                }
            }
            if ($favicon !=null){
                $request->validate([
                    'favicon' => 'required|mimes:png|dimensions:max_width=100,max_height=100',
                ],
                [
                 'favicon.required' => '"Favicon" Bölməsi boş buraxıla bilməz.Logo png formatında logo file yükləyin.',
                'favicon.mime' => '"Favicon" png formatında logo fayl seçib yükləyin.',
                'favicon.dimensions' => '"Favicon" Fayl ölçülər yanlışdır. Genişlik:100px ,Yüksəklik:100px olmalıdır.',

                ]);

                if ($favicon->isValid()) {
                    $newimagename = env('APP_NAME') .'-logo' . '.' . $favicon->getClientOriginalExtension();
                    $imageurl = $path . '/' . $newimagename; //for DB

                    $imagepath = public_path() . $path;
                    $favicon->move($imagepath, $newimagename);
                    $setting->favicon = $imageurl;
                }
            }


               $setting->title  = $request->title;
               $setting->meta_description  = $request->meta_description;
               $setting->meta_tags  = $request->meta_tags;


            $setting->save();

            $feedbackdata = ['title' => 'Uğurlu !',
                'message' => 'Sayt məlumatları uğurla qeyd edildi',
                'type' => 'success', ];
            return back()->with('feedback', $feedbackdata);
        }
        catch (Exception $exception){
            $feedbackdata = ['title' => 'Uğursuz !',
                'message' => 'Sayt məlumatları yaddaşa yazılarkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'type' => 'danger'];
            return back()->with('feedback', $feedbackdata);
        }
    }

}
