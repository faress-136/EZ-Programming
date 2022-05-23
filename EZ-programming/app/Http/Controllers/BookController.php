<?php

namespace App\Http\Controllers;

use App\Models\PLanguage;
use App\Models\Course;
use App\Models\RegisteredCourse;
use Facade\Ignition\QueryRecorder\Query;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Office;
use DateTime;
use Mockery\Matcher\Not;
use Illuminate\Support\Collection;
use Mockery\Matcher\Any;
use PhpParser\Node\Expr\New_;

class BookController extends Controller
{
    public function DatePick()
    {
        $Offices = Office::orderBy('id')->get();
        $PLanguages = PLanguage::orderBy('id')->get();
        return view('DatePick', [
            'PLanguages' => $PLanguages,
            'Offices' => $Offices

        ]);
    }


    public function Courses(Request $request)
    {

        $PLanguages = PLanguage::orderBy('id')->get();
        $StartDate = $request->input('StartDate');
        $City = $request->input('City');
        return view('PLanguageChoose', [
            'PLanguages'       =>  $PLanguages,
            'StartDate'   =>  $StartDate,
            'City'         =>  $City

        ]);
    }
    public function Showcourses($PLanguage, $StartDate, $City)
    {


        $NewCourses = DB::table('courses')->get();
        $Result = $NewCourses->where('PLanguage', $PLanguage);
        $Result = $Result->where('City', $City);
        $Result = $Result->where('Start_date', '>', $StartDate);

        return redirect()->back()->with(['Courses' => $Result]);
    }


    public function  Register($Course_id, $StartDate, $City)
    {

        $Teacher = Course::where('id', '=', $Course_id)->first();

        $user = auth()->user();
        $Register = new RegisteredCourse();
        $Register->Course_id = $Course_id;
        $Register->Teacher_id = $Teacher->Teacher_id;
        $Register->Student_id = $user->id;
        $Register->Start_date = $StartDate;
        $Register->End_date = "2025-05-18";
        $Register->City = $City;
        $Register->Paid = "No";
        $Register->TMoney  = 0;



        $Register->save();


        return redirect('/home')->with('status', 'Course Registered Successfully');
    }
    public function Search(Request $request, $Date, $City)
    {


        $NewCars = DB::table('courses')->get();



        $Result  =  $NewCars->where('City', $City);;

        $PLanguage = $request->input('PL');
        $Name = $request->input('Name');
        $MinPrice = $request->input('MinPrice');
        $MaxPrice  = $request->input('MaxPrice');

        if ($PLanguage != 'Any') {
            $Result = $Result->where('PLanguage', $PLanguage);
        }
        if ($Name != "") {
            $Result = $Result->where('Name', 'LIKE', '%' . $Name . '%');
        }
        if ($MinPrice != "") {
            $Result = $Result->where('Price', '>=', $MinPrice);
        }
        if ($MaxPrice != "") {
            $Result = $Result->where('Price', '<=', $MaxPrice);
        }


        return redirect()->back()->with(['Courses' => $Result]);
    }

    public function OfferedCourses()
    {
        $user = auth()->user();
        $MyCourses = Course::where('Teacher_id', $user->id)->orderBy('id')->get();
        return view('Customer.OfferedCourses', [
            'MyCourses' => $MyCourses,

        ]);
    }
}
