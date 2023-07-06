<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\phoneNumbersRequest;
use App\Traits\allTraits;
use App\Models\phone;
use App\Models\logo;


class phoneNumbersController extends Controller
{


    public function phones() {

        $phones =  phone::All();
        $logos =  logo::All();
        return view('admin.addPhoneNumbers', compact('phones', 'logos'));
    }



    public function phoneNumbersPost(phoneNumbersRequest $request)
    {


        phone::create([
            'phone' => $request -> phone,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }

    public function allPhones() {

        $phones =  phone::All();
        $logos =  logo::All();
        return view('admin.allPhoneNumbers', compact('phones', 'logos'));
    }



    public function phoneDelete($phone_id)
    {

        $phone = phone::find($phone_id);

        if (!$phone)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $phone->delete();

        return redirect()
            ->route('allPhoneNumbers')
            ->with(['successDelete' => __('messages.news deleted successfully')]);

    }




}
