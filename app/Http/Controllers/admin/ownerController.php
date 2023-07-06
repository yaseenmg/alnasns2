<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ownerRequest;
use App\Models\owner;
use LaravelLocalization;
use App\Traits\allTraits;

class ownerController extends Controller
{
    use allTraits;

    public function owners() {

        $owners =  owner::All();
        return view('admin.addOwner', compact('owners'));
    }


    public function ownerPost(ownerRequest $request)
    {

        $file_name = $this->saveImage($request->photo, 'images/owner');

        owner::create([
            'photo' => $file_name,

        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function allOwners() {

        $owners =  owner::All();
        return view('admin.allOwners', compact('owners'));
    }


    public function deleteOwner($owners_id)
    {

        $owners = owner::find($owners_id);

        if (!$owners)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $owners->delete();

        return redirect()
            ->route('allOwners')
            ->with(['successDelete' => __('messages.news deleted successfully')]);

    }


    public function editOwner($owners_id)
    {

        // addNews::findOrFail($news_id);
        $owner = owner::find($owners_id);  // search in given table id only
        if (!$owner)
            return redirect()->back();

        $owners = owner::all()->find($owners_id);
        return view('admin.editOwner', compact('owners'));


    }


    public function UpdateOwner(ownerRequest $request, $owners_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/owner');
        // chek if offer exists

        $owner = owner::find($owners_id);
        if (!$owner)
            return redirect()->back();

        //update data

        $owner->update([
            'photo' => $file_name,
        ]);



        return redirect()->back()->with(['successEdit' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }

}
