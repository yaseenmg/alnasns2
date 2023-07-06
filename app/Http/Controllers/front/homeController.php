<?php


namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\slider;
use App\Models\logo;
use App\Models\project;
use App\Models\about;
use App\Models\address;
use App\Models\phone;
use App\Models\addWhatsNum;
class homeController extends Controller
{

    function index(){

        $logos =  logo::All();
        $sliders =  slider::All();
        $projects =  project::All();
        $abouts =  about::All();
        $addresses =  address::All();
        $phones =  phone::All();
        $whatsNum =  addWhatsNum::All();

        return view('front.home', compact('logos', 'sliders', 'projects', 'abouts', 'addresses', 'phones', 'whatsNum'));
    }


}
