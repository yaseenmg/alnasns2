<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\addressRequest;
use App\Traits\allTraits;
use App\Models\address;
use App\Models\logo;



class addressController extends Controller
{


    public function address() {

        $addresses =  address::All();
        $logos =  logo::All();
        return view('admin.addAddress', compact('addresses', 'logos'));
    }



    public function addressPost(addressRequest $request)
    {


        address::create([
            'address' => $request -> address,
        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }

    public function allAddress() {

        $addresses =  address::All();
        $logos =  logo::All();
        return view('admin.allAddress', compact('addresses', 'logos'));
    }



    public function deleteAddress($address_id)
    {

        $address = address::find($address_id);

        if (!$address)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $address->delete();

        return redirect()
            ->route('allAddress')
            ->with(['successDelete' => __('messages.news deleted successfully')]);

    }




}
