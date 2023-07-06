<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\aboutRequest;
use App\Models\about;
use LaravelLocalization;
use App\Traits\allTraits;

class aboutUsController extends Controller
{
    use allTraits;

    public function aboutUs() {

        $abouts =  about::All();
        return view('admin.addAboutUs', compact('abouts'));
    }


    public function aboutUsPost(aboutRequest $request)
    {

        $file_name = $this->saveImage($request->photo, 'images/about');

        about::create([
            'photo' => $file_name,
            'title' => $request -> title,
            'details' => $request -> details,


        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function allAboutUs() {

        $abouts =  about::All();
        return view('admin.allAboutUs', compact('abouts'));
    }


    public function deleteAboutUs($abouts_id)
    {

        $abouts = about::find($abouts_id);

        if (!$abouts)
            return redirect()->back()->with(['error' => __('messages.about not exist')]);

        $abouts->delete();

        return redirect()
            ->route('allAboutUs')
            ->with(['successDelete' => __('messages.about deleted successfully')]);

    }


    public function editAboutUs($abouts_id)
    {

        // addabout::findOrFail($about_id);
        $about = about::find($abouts_id);  // search in given table id only
        if (!$about)
            return redirect()->back();

        $abouts = about::all()->find($abouts_id);
        return view('admin.editAboutUs', compact('abouts'));


    }


    public function UpdateAboutUs(aboutRequest $request, $abouts_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/about');
        // chek if offer exists

        $about = about::find($abouts_id);
        if (!$about)
            return redirect()->back();

        //update data

        $about->update([
            'photo' => $file_name,
            'title' => $request -> title,
            'details' => $request -> details,
        ]);



        return redirect()->back()->with(['successEdit' => ' تم التحديث بنجاح ']);


        /*
        $addabout->update($request->all());
        */

    }

}
