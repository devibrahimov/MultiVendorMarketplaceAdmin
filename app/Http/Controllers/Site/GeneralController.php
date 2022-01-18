<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CorporativePages;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        return view('site.pages.general.home');
    }

    public function corporativ(Request $request){
        $slug = $request->slug ;

        $corporative = CorporativePages::where('slug',$slug)->first();
        return view('site.pages.general.corporative',compact(['corporative']));
    }
}
