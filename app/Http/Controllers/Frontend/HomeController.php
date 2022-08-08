<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vlog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        $vlogs = Vlog::latest()->get();
        return view('frontend.index', compact('vlogs'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    // about method
    public function about()
    {
        return view('frontend.about');
    }

    // about sample page
    public function sample()
    {
        return view('frontend.sample');
    }

    // about addpost
    public function addPost()
    {
        return view('frontend.addPost');
    }


    // about single vlog page
    public function singleVlog($id)
    {
        $vlog = Vlog::findOrFail($id);
        return view('frontend.vlog', compact('vlog'));
    }
    public function createPost(Request $request)
    {
        $inputs = $request->all();
        $inputs['date'] = date('y-m-d');
        Vlog::create($inputs);
        return view('frontend.addPost')->with('success', 'Post Created Successfully');
    }
    public function deletePost($id)
    {
        $vlog = Vlog::findOrFail($id);
        $vlog->delete();
        session()->flash('success', 'Post Deleted Successfully');
        return redirect()->route('home');
    }

    // about editPost
    public function editPost($id)
    {
        $vlog = Vlog::find($id);
        return view('frontend.editPost', compact('vlog'));
    }

    public function updatePost($id, Request $request)
    {
        $inputs = $request->all();
        $vlog = Vlog::find($id);
        $vlog->update($inputs);
        session()->flash('success', 'Post Updated Successfully');
        return redirect()->route('home');
    }
}
