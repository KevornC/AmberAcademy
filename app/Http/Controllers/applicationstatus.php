<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\approvedmail;
use App\Mail\deniedmail;

class applicationstatus extends Controller
{
    //
    function application_status(){
        $data=DB::table('applications')->where('id','=',Auth::User()->id)->get();
        Session()->put('app_stat',$data);

        return view('applicationstatus');
    }

    // Admin ViewApplication Methods
    function view_all_applications(){
        $data = DB::table('applications')->where('response','=',2)->get();
        return view('admin.ViewAllApplication',['data'=>$data]);
    }


    // Admin ApproveApplication Methods

    function approve_application($id=null){
        $data = DB::table('applications')->where('table_id','=',$id)->update(['response'=>1]);
        $data = DB::table('applications')->where('table_id','=',$id)->update(['approved_by'=>Auth::user()->Firstname." ".Auth::user()->lastname]);

        $get= DB::table('applications')->where('table_id','=',$id)->where('response','=',1)->get();

        foreach($get as $info){
            $email=$info->email;
            $student_name=$info->student_name;
            $student_course=$info->student_course;
            $approvedby=$info->approved_by;

        }
        $details=[
            'student_name'=> $student_name,
            'student_course'=> $student_course,

          ];
      Mail::to($email)->send(new approvedmail($details));

      Session()->put('exportdata',$get);
      return view('admin\XMLexport');
    }

    function view_approved_applications(){
        $data = DB::table('applications')->where('response','=','1')->get();
        return view('admin.ViewApprovedApplication',['data'=>$data]);
    }

    // Admin DeniedApplication Methods

    function deny_application($id=null){
        $data = DB::table('applications')->where('table_id','=',$id)->update(['response'=>0]);

        $get= DB::table('applications')->where('table_id','=',$id)->where('response','=',0)->get();

        foreach($get as $info){
            $email=$info->email;
            $student_name=$info->student_name;
            $student_course=$info->student_course;

        }
        $details=[
            'student_name'=> $student_name,
            'student_course'=> $student_course,
          ];
        Mail::to($email)->send(new deniedmail($details));
        return redirect('/view');
    }

    function view_denied_applications()
    {
        $data = DB::table('applications')->where('response', '=', '0')->get()->count();
        if($data > 0) {
            $data = DB::table('applications')->where('response', '=', '0')->get();
            return view('admin.ViewDeniedApplication', ['data' => $data]);
        } else {
            $data = array();
            return view('admin.ViewDeniedApplication',compact('data'));
        }
    }

}
