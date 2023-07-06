<?php


namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\slider;
use App\Models\logo;
use App\Models\about;
use App\Models\owner;
use App\Models\address;
use App\Models\phone;
use App\Models\addWhatsNum;
class aboutUsController extends Controller
{

    function aboutUs(){

        $logos =  logo::All();
        $abouts =  about::All();
        $owners =  owner::All();
        $addresses =  address::All();
        $phones =  phone::All();
        $whatsNum =  addWhatsNum::All();


        return view('front.aboutUs', compact('logos', 'abouts', 'owners', 'addresses', 'phones', 'whatsNum'));
    }


}
