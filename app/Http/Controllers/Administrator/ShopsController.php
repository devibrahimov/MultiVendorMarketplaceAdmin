<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ShopRequest;
use App\Http\Requests\RegionRequest;
use App\Models\Region;
use App\Models\Shop;
use App\Models\Shopİnformation;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopsController extends Controller
{

    public function index(Request $request)
    {
        $shops = Shop::with('category')->get();
        return view('administrator.pages.shop.index',compact('shops'));
    }


    public function create()
    {
    }


    public function store(ShopRequest $request)
    {

    }

    public function show($id)
    {
        //
    }


    public function edit(Region  $region)
    {

    }

    public function update(ShopRequest $request,Shop $shop)
    {
        $validated['aprovel'] = $request->has('aprovel');

        $shop->update($validated);

         return  \response()->json(["status"=>200]);
    }

    public function destroy(Region $region)
    {

    }
}
