<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TlsController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about-us');
    }
    public function digitalMarketing(){
        return view('digital-marketing');
    }
    public function webDevelopment(){
        return view('web-development');
    }
    public function appDevelopment(){
        return view('app-development');
    }
    public function chooseUs(){
        return view('why-choose-us');
    }
    public function contactUs(){
        return view('contact-us');
    }
    public function courseEnquiry(){
        return view('course-enquiry');
    }
}
