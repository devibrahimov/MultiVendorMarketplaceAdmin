<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionRequest;
use App\Models\Region;
use App\Models\Shopİnformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopİnformationController extends Controller
{

    public function index()
    {
        $shop_informations = Shopİnformation::all();
        return view('administrator.pages.shop_informations.index',compact('shop_informations'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }

    public function show($id)
    {
        //
    }


    public function edit(Region  $region)
    {

    }

    public function update(Request $request, Region $region)
    {

    }


    public function destroy(Region $region)
    {

    }
}
