<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\whatsNumRequest;
use App\Models\addWhatsNum;
use LaravelLocalization;
use App\Traits\allTraits;
use App\Models\logo;

class whatsNumController extends Controller
{
    use allTraits;

    public function addWhatsNum(){
        $whatsNum =  addWhatsNum::All();

        return view('admin.addWhatsAppNumber', compact('whatsNum'));

    }

    public function whatsNumPost(whatsNumRequest $request)
    {


        addWhatsNum::create([
            'phone' => $request -> phone,

        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }




    public function allWhatsNum() {

        $whatsNum =  addWhatsNum::All();
        $logos =  logo::All();
        return view('admin.allWhatsAppNumber', compact('whatsNum', 'logos'));
    }


    public function deleteWhatsNum($whatsNum_id)
    {

        $addWhatsNum = addWhatsNum::find($whatsNum_id);

        if (!$addWhatsNum)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $addWhatsNum->delete();

        return redirect()
            ->route('addWhatsNum')
            ->with(['successDelete' => __('messages.news deleted successfully')]);

    }


    public function editWhatsNum($whatsNum_id)
    {

        // addNews::findOrFail($news_id);
        $addWhatsNum = addWhatsNum::find($whatsNum_id);  // search in given table id only
        if (!$addWhatsNum)
            return redirect()->back();

        $whatsNum = $addWhatsNum::all()->find($whatsNum_id);

        return view('admin.editWhatsAppNumber', compact('whatsNum'));

    }


    public function UpdateWhatsNum(whatsNumRequest $request, $whatsNum_id)
    {

        $addWhatsNum = addWhatsNum::find($whatsNum_id);
        if (!$addWhatsNum)
            return redirect()->back();

        //update data

        $addWhatsNum->update([
            'phone' => $request -> phone,
        ]);



        return redirect()->back()->with(['successEdit' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }

}
