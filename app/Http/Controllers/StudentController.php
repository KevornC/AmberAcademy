<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //

    function application_status()
    {
           return view('applicationstatus');
    }

    function apply($id=null){
      $data = DB::table('courses')->where('course_id', '=', $id)->get();

        foreach ($data as $info) {
            $courseid = $info->course_id;
            $coursename = $info->course_name;
            $coursetime = $info->course_time;
            $startdate = $info->start_date;
            $enddate = $info->end_date;
            $courseinfo = $info->course_info;
            $coursecost = $info->course_cost;
        }
        $start = explode("-", $startdate);

        $startmonth = $start[0];
        $startday = $start[1];
        $startyear = $start[2];


        $End = explode("-", $enddate);

        $Endmonth = $End[0];
        $Endday = $End[1];
        $Endyear = $End[2];


      return view('apply',['course_id' => $courseid, 'course_name' => $coursename, 'Endmonth' => $Endmonth,
      'Endday' => $Endday, 'Endyear' => $Endyear, 'startmonth' => $startmonth, 'startday' => $startday, 'startyear' => $startyear, 
      'course_info' => $courseinfo, 'course_cost' => $coursecost, 'course_time' => $coursetime]);
      return view('applicationstatus');
     
    }
  }
