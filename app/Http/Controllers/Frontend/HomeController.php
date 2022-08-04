<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vlog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      
        
        $vlogs = Vlog::latest()->get();
        return view('frontend.index',compact('vlogs'));
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

    // about single vlog page
    public function singleVlog($id){
        $vlog =Vlog::findOrFail($id);
        return view('frontend.vlog',compact('vlog'));
    }
}
