<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Education;
use App\Models\Tips;

class BackendController extends Controller
{
    public function index(){
        return view('backend.index');
    }

    public function about(){
        $data = About::all();
        return view('backend.about.add', compact('data'));
    }

    public function addAbout(Request $request){
        $request->validate([
            'title' => 'required|unique:abouts',
            'details' => 'required|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $data = new About();
        $data->title = $request->title;
        $data->details = $request->details;
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $extension = $request->file('image')->getClientOriginalExtension();
            $name = 'upload_' . time() . '.' . $extension;
            $destinationPath = 'assets/uploads/image';
            $files->move($destinationPath, $name);
            $img_url = $destinationPath. "/" .$name;
        }
        $data->image = $img_url;
        $data->save();

        return redirect()->back()->with(['msg' => 'Data Inserted Successfully']);
    }

    public function education(){
        $data = Education::all();
        for($i = 2000; $i <=date("Y"); $i++){
            $years[] = $i;
        }
        return view('backend.education.add',compact('years','data'));
    }

    public function educationAdd(Request $request){
        $request->validate([
            'institution' => 'required',
            'degree' => 'required',
            'year' => 'required'
        ]);

        $data = new Education();
        $data->degree = $request->degree;
        $data->institution = $request->institution;
        $data->major = $request->major;
        $data->year = $request->year;
        $data->grading_point = $request->gp;
        $data->remark = $request->remarks;
        $data->save();

        return redirect()->back()->with(['msg' => 'Data Inserted Successfully']);
    }

    public function experience(){
        for($i = 2000; $i <=date("Y"); $i++){
            $years[] = $i;
        }
        return view('backend.experience.add',compact('years'));
    }

    public function expAdd(Request $request){
        $request->validate([
            'institution' => 'required',
            'desig' => 'required',
            'startYear' => 'required'
        ]);

        $data = new Experience();
        $data->institution = $request->institution;
        $data->designation = $request->desig;
        if ($request->current) {
            // $duration = implode('-',)
        }
    }

    public function tipsPage(){
        $blogs = Tips::orderBy('created_at','desc')->get();
        return view('backend.tips.add',compact('blogs'));
    }

    public function tipsAdd(Request $request){
        // dd($request->context);
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'context' => 'required'
        ]);

        $data = new Tips();
        $data->title = $request->title;
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $extension = $request->file('image')->getClientOriginalExtension();
            $name = 'upload_' . time() . '.' . $extension;
            $destinationPath = 'assets/uploads/details';
            $files->move($destinationPath, $name);
            $img_url = $destinationPath. "/" .$name;
        }
        $data->image = $img_url;
        
        $data->context = $request->context;
        $data->save();

        return redirect()->back()->with(['msg' => 'Data Inserted Successfull']);
    }

    public function blogDelete($id){
        Tips::find($id)->delete();
        return redirect()->back()->with(['delMsg' => 'Blog Deleted']);
    }
}
