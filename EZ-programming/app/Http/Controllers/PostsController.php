<?php

namespace App\Http\Controllers;

use App\Models\Course;
use  App\Models\PLanguage;
use Illuminate\Http\Request;


class PostsController extends Controller
{ 
    public function create(){

        return view('posts.create');
    }

    public function AddPLanguage(Request $request){

        $user = auth()->user();
        $PLanguage = new PLanguage ;
        $PLanguage->Brand = $request->input('CarBrand');
        $PLanguage->user_id = $user->id;
        if($request->hasFile('BrandLogo')){
            $file = $request->file('BrandLogo');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('uploads/PLanguage/',$fileName);
            $PLanguage->PLanguage_Image= $fileName;
        }else{
            $PLanguage->PLanguage_Image = '/uses/course.jpg';
        }
        
        $PLanguage->save();

        return redirect()->back()->with('status','Brand Added Successfully');
       
}

public function AddCourse(Request $request){

    $user = auth()->user();
    $Course = new Course;
    $Course->PLanguage = $request->input('PL');
    $Course->Teacher_ID = $user->id;
    $Course->Information = $request->input('Details');
    $Course->Price = $request->input('Cost');
    $Course->Name = $request->input('Name');
    $Course->Start_date = $request->input('StartDate');
    $Course->City =  $request->input('City');

  if($request->hasFile('Image')){
            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('uploads/Courses/',$fileName);
            $Course->Image = $fileName;
        }else{
            $Course->Image = '/uses/course.jpg';
        }
    
    $Course->save();

    return redirect()->back()->with('status','Course Added Successfully');
}
}