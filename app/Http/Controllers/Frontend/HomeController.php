<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name="Paras";
        $surname="Shrestha";
    
        
        return view('frontend.index',compact('name','surname'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    // about method
    public function about(){
        return view('frontend.about');
    }

    // about sample page 
    public function sample(){
        return view('frontend.sample');
    }
}
