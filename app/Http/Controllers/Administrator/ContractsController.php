<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\ContractRequest;
use App\Http\Requests\General\CorporativeRequest;
use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContractsController extends Controller
{
    public function  index(){
        $contracts = Contract::all();
        return view('administrator.pages.contract.index',compact('contracts'));
    }
    public function store(ContractRequest $request){
        try{

            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'slug' => Str::slug($request->title),
            ];

            $contract= new Contract();
            $contract->create($data);

            $feedbackdata = ['title' => 'Uğurlu !',
                'message' => 'Sayt məlumatları uğurla qeyd edildi',
                'type' => 'success', ];
            return back()->with('feedback', $feedbackdata);
        }catch (\Exception $exception){
            $feedbackdata = ['title' => 'Uğursuz !',
                'message' => 'Sayt məlumatları yaddaşa yazılarkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'type' => 'danger'];
            return back()->with('feedback', $feedbackdata);
        }

    }//end store function

    public function edit(int $id){
        $contract = Contract::find($id) ;
        $contracts = Contract::all();
        return view('administrator.pages.contract.edit',compact(['contract','contracts']));
    }
    public function update(Request $request , int $id){
        try{

            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'slug' => Str::slug($request->title),
            ];
            $contract=   Contract::find($id);
            $contract->update($data);

            $feedbackdata = ['title' => 'Uğurlu !',
                'message' => 'Sayt məlumatları uğurla qeyd edildi',
                'type' => 'success', ];
            return back()->with('feedback', $feedbackdata);
        }catch (\Exception $exception){
            $feedbackdata = ['title' => 'Uğursuz !',
                'message' => 'Sayt məlumatları yaddaşa yazılarkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'type' => 'danger'];
            return back()->with('feedback', $feedbackdata);
        }
    }
    public function contractdelete($id){
        try {

            Contract::find($id)->delete();

            $feedbackdata = ['title' => 'Uğurlu !',
                'message' => 'Sozlesme uğurla silindi',
                'type' => 'success', ];
            return back()->with('feedback', $feedbackdata);
        }catch (\Exception $exception){
            $feedbackdata = ['title' => 'Uğursuz !',
                'message' => 'Sozlesme silinərkən xəta baş verdi. Xəta: '.$exception->getMessage(),
                'type' => 'danger'];
            return back()->with('feedback', $feedbackdata);
        }
    }//end delete function

}
