<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionRequest;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('region')->get();
        return view('administrator.pages.users.index',compact('users'));
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
