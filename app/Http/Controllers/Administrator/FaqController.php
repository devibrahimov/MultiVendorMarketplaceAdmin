<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\FaqRequest;
use App\Models\Faq;
use App\Models\Region;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('administrator.pages.faqs.index',compact('faqs'));
    }


    public function create()
    {
        return view('pages.faqs.index');
    }


    public function store(FaqRequest $request)
    {
        $validated = $request->validated();

        Faq::create($validated);

        return redirect()->route('faqs.index')
            ->with('success','Faq created successfully.');
    }

    public function show($id)
    {
        //
    }


    public function edit(Faq  $faq)
    {
        return view('administrator.pages.faqs.edit',compact('faq'));

    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'min:1',
            'answer' => 'min:1',
        ]);

        $faq->update($request->all());

        return redirect()->route('faqs.index')
            ->with('success','Faq Update successfully.');
    }


    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index')
            ->with('success','Faq Deleted successfully.');
    }
}
