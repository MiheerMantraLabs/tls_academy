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
}
