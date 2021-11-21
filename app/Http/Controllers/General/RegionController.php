<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionRequest;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        return view('pages.region.index',compact('regions'));
    }


    public function create()
    {
        return view('pages.region.index');
    }


    public function store(RegionRequest $request)
    {
        $validated = $request->validated();

        $validated['slug'] = Str::slug($request->name);

        Region::create($validated);


        return redirect()->route('region.index')
            ->with('success','Region created successfully.');
    }

    public function show($id)
    {
        //
    }


    public function edit(Region  $region)
    {
        return view('pages.region.edit',compact('region'));

    }

    public function update(Request $request, Region $region)
    {
        $request->validate([
            'name' => 'min:1',
            'detail' => 'min:1',
        ]);

        $region->update($request->all());

        return redirect()->route('region.index')
            ->with('success','Region Update successfully.');
    }


    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('region.index')
            ->with('success','Region Deleted successfully.');
    }
}
