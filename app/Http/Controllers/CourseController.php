<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    function coursestudentview(){
        $data = course::all();
        return view('coursestudentview', ['courses' => $data]);
    }
    function courseguestview(){
        $data = course::all();
        return view('courseguestview', ['courses' => $data]);
    }
    function viewadd()
    {
        return view('CourseFolder.AddCourseView');
    }

    function add(Request $req)
    {

        course::create([
            'course_id' => strtoupper($req->courseid),
            'course_name' => strtoupper($req->coursename),
            'start_date' => $req->start_month . '-' . $req->start_day . '-' . $req->start_year,
            'end_date' => $req->end_month . '-' . $req->end_day . '-' . $req->end_year,
            'course_time' =>$req->coursetime,
            'course_info' => $req->courseinfo,
            'course_cost' => $req->coursecost,
            'modified_by' => ucfirst(Auth::user()->Firstname) . ' ' . ucfirst(Auth::user()->lastname)

        ]);
//        return "Success";
        return view('CourseFolder.AddCourseView');
    }

    function view()
    {
        $data = course::all();
        return view('CourseFolder.ViewCourseView', ['courses' => $data]);
    }


    function delete($id = null)
    {
        DB::table('courses')->where('course_id', '=', $id)->delete();
        $data = course::all();
        return redirect('viewcourse');
    }

    function viewupdate($id = null)
    {
        $data = DB::table('courses')->where('course_id', '=', $id)->get();
// dd($data);
        foreach ($data as $info) {
            $courseid = strtoupper($info->course_id);
            $coursename = strtoupper($info->course_name);
            $coursetime = $info->course_time;
            $startdate = $info->start_date;
            $enddate = $info->end_date;
            $courseinfo = $info->course_info;
            $coursecost = $info->course_cost;
        }
//   echo $startdate;
// dd($startdate);
        $start = explode("-", $startdate);

        $startmonth = $start[0];
        $startday = $start[1];
        $startyear = $start[2];


        $End = explode("-", $enddate);

        $Endmonth = $End[0];
        $Endday = $End[1];
        $Endyear = $End[2];

        return view('CourseFolder.UpdateCourseView', ['course_id' => $courseid, 'course_name' => $coursename, 'Endmonth' => $Endmonth,
            'Endday' => $Endday, 'Endyear' => $Endyear, 'startmonth' => $startmonth, 'startday' => $startday, 'startyear' => $startyear, 
            'course_info' => $courseinfo, 'course_cost' => $coursecost, 'course_time' => $coursetime]);
    }

    function update(Request $req){
         DB::table('courses')->where('course_id', '=', $req->courseid)->update([
                'course_id' => strtoupper($req->courseid),
                'course_name' => strtoupper($req->coursename),
                'course_time' => $req->coursetime,
                'start_date' => $req->start_month . '-' . $req->start_day . '-' . $req->start_year,
                'end_date' => $req->end_month . '-' . $req->end_day . '-' . $req->end_year,
                'course_info' => $req->courseinfo,
                'course_cost' => $req->coursecost,
        ]);
        
               
        return redirect('viewcourse');
    }
}
