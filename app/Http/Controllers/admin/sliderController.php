<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\sliderRequest;
use App\Models\slider;
use LaravelLocalization;
use App\Traits\allTraits;

class sliderController extends Controller
{
    use allTraits;

    public function slider() {

        $sliders =  slider::All();
        return view('admin.addslider', compact('sliders'));
    }


    public function sliderPost(sliderRequest $request)
    {

        $file_name = $this->saveImage($request->photo, 'images/slider');

        slider::create([
            'photo' => $file_name,

        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function allSlider() {

        $sliders =  slider::All();
        return view('admin.allslider', compact('sliders'));
    }


    public function deleteSlider($sliders_id)
    {

        $sliders = slider::find($sliders_id);

        if (!$sliders)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $sliders->delete();

        return redirect()
            ->route('allSlider')
            ->with(['successDelete' => __('messages.news deleted successfully')]);

    }


    public function editSlider($sliders_id)
    {

        // addNews::findOrFail($news_id);
        $slider = slider::find($sliders_id);  // search in given table id only
        if (!$slider)
            return redirect()->back();

        $sliders = slider::all()->find($sliders_id);
        return view('admin.editslider', compact('sliders'));


    }


    public function UpdateSlider(sliderRequest $request, $sliders_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/slider');
        // chek if offer exists

        $slider = slider::find($sliders_id);
        if (!$slider)
            return redirect()->back();

        //update data

        $slider->update([
            'photo' => $file_name,
        ]);



        return redirect()->back()->with(['successEdit' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }

}
