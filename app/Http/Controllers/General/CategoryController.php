<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\CategoryRequest;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Region;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $parentCategories = Category::whereNull('parent_id')->get();
        $categories  = Category::get();
        return view('pages.categories.index', compact('categories','parentCategories'));
    }


    public function create()
    {
        return view('pages.categories.index');

    }


    public function store(CategoryRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $image_path_icon = $request->file('icon')->storeAs('public', 'categories/'.time() . '-icon' . '.' . $request->file('icon')->extension());
        $image_path_image = $request->file('image')->storeAs('public', 'categories/'.time() . '.' . $request->file('image')->extension());

        $validated['icon'] = $image_path_icon;
        $validated['image'] = $image_path_image;
        $validated['slug'] = Str::slug($validated['name']);
        $validated['status'] = $request->has('status');


        Category::create($validated);

        return redirect()->route('category.index')->with('message', 'Created successfully!');
    }

    public function show($id)
    {
        //
    }


    public function edit(Category  $category)
    {
        $parentCategories = Category::whereNull('parent_id')->get();
        $categories  = Category::get();

        return view('pages.categories.edit', compact('category','parentCategories','categories'));
    }


    public function update(CategoryRequest $request, Category $category)
    {
        $validated = $request->validated();

        $validated['status'] = $request->has('status');
        $category->update($validated);

        return redirect()->route('category.index')
            ->with('success','Category Update successfully.');
    }


    public function destroy(Category  $category)
    {
        $category->delete();

        return redirect()->route('category.index')
            ->with('success','Category Deleted successfully.');
    }
}
