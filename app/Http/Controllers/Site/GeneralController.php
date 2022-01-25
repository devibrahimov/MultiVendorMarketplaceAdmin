<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Models\CorporativePages;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        $settings = Setting::query()->get();
        return view('site.pages.general.home',compact('settings'));
    }


    public function corporativ(Request $request){
        $slug = $request->slug ;

        $corporative = CorporativePages::where('slug',$slug)->first();
        return view('site.pages.general.corporative',compact(['corporative']));
    }

    public function contract(Request $request){
        $slug = $request->slug ;

        $contracts = Contract::where('slug',$slug)->first();
        return view('site.pages.general.contract',compact('contracts'));
    }

}
