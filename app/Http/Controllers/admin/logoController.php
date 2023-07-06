<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\logoRequest;
use App\Models\logo;
use LaravelLocalization;
use App\Traits\allTraits;

class logoController extends Controller
{
    use allTraits;

    public function logo() {

        $logos =  logo::All();
        return view('admin.addLogo', compact('logos'));
    }


    public function logoPost(logoRequest $request)
    {

        $file_name = $this->saveImage($request->photo, 'images/logo');

        logo::create([
            'photo' => $file_name,

        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function allLogo() {

        $logos =  logo::All();
        return view('admin.allLogo', compact('logos'));
    }


    public function deleteLogo($logos_id)
    {

        $logos = logo::find($logos_id);

        if (!$logos)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $logos->delete();

        return redirect()
            ->route('allLogo')
            ->with(['successDelete' => __('messages.news deleted successfully')]);

    }


    public function editLogo($logos_id)
    {

        // addNews::findOrFail($news_id);
        $logo = logo::find($logos_id);  // search in given table id only
        if (!$logo)
            return redirect()->back();

        $logos = logo::all()->find($logos_id);
        return view('admin.editLogo', compact('logos'));


    }


    public function UpdateLogo(logoRequest $request, $logos_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/logo');
        // chek if offer exists

        $logo = logo::find($logos_id);
        if (!$logo)
            return redirect()->back();

        //update data

        $logo->update([
            'photo' => $file_name,
        ]);



        return redirect()->back()->with(['successEdit' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }

}
