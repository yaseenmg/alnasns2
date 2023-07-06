<?php


namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\slider;
use App\Models\logo;
use App\Models\news;
use App\Models\address;
use App\Models\phone;
use App\Models\addWhatsNum;
class newsController extends Controller
{

    function news(){

        $logos =  logo::All();
        $news_s =  news::All();
        $addresses =  address::All();
        $phones =  phone::All();
        $whatsNum =  addWhatsNum::All();


        return view('front.news', compact('logos', 'news_s', 'addresses', 'phones', 'whatsNum'));
    }


}
