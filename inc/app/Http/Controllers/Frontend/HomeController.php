<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Education;
use App\Models\Tips;

class HomeController extends Controller
{
    public function index(){
        $data = About::latest()->first();
        $education = Education::all();
        $tips = Tips::all();
        // dd($tips);
        return view('frontend.index',compact('data','education','tips'));
    }

    public function tipsDetails(){
        $blogs = Tips::orderBy('created_at','desc')->get();
        return view('frontend.blog',compact('blogs'));
    }

    public function blogDetails($id){
        $blogs = Tips::orderBy('created_at','desc')->get();
        $detail = Tips::where('id',$id)->first();
        return view('frontend.blog_details',compact('detail','blogs'));
    }
}
