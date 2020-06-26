<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;

class PageController extends Controller
{


    public function index()
    {
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();

        return view('index',$data);

    }


    public function gallery(){

        return view('website.pages.gallery');

    }


    public function admissioninfo()
    {

        return view('website.pages.admission-info');

    }

    public function notice()
    {

        return view('website.pages.notice');

    }

    public function contact(){


        return view('website.pages.contact');


    }


    public function aboutus()
    {

        return view('website.pages.aboutus');

    }


}
