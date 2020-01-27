<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmController extends Controller
{
    public function home(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function contact(){
        return view('contact');
    }
    public function news(){
        return view('news');
    }
    public function emShop(){
        return view('emshop');
    }
}
