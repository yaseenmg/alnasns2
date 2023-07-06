<?php


namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\logo;
use App\Models\project;
use App\Models\address;
use App\Models\phone;
use App\Models\addWhatsNum;
class projectsController extends Controller
{

    function projects(){

        $logos =  logo::All();
        $projects =  project::All();
        $addresses =  address::All();
        $phones =  phone::All();
        $whatsNum =  addWhatsNum::All();


        return view('front.projects', compact('logos', 'projects', 'addresses', 'phones', 'whatsNum'));
    }


}
