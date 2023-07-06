<?php


namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\slider;
use App\Models\logo;
use App\Models\news;
use App\Models\address;
use App\Models\phone;
use App\Models\video;
use App\Models\addWhatsNum;
class videosController extends Controller
{

    function videos(){

        $logos =  logo::All();
        $videos =  video::All();
        $addresses =  address::All();
        $phones =  phone::All();
        $whatsNum =  addWhatsNum::All();


        return view('front.videos', compact('logos', 'videos', 'addresses', 'phones', 'whatsNum'));
    }


}
