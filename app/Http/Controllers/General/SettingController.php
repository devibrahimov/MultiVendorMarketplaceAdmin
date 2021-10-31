<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\SettingRequest;

class SettingController extends Controller
{
    public function index(){
        return view('pages.general.setting');
    }

    public function store(SettingRequest $request){


    }

}
