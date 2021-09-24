<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\payment_info;

class PaymentController extends Controller
{
    //
    function makepayment(){

        $count=DB::table('applications')->where('id','=',Auth::User()->id)->where('response','=',1)->count();

        if($count<1){
         $result = "nopayment";
        Session()->put('payment_count', $result);
        }
        elseif($count>0){
            $result = "payment";
            Session()->put('payment_count', $result);
          
        $data=DB::table('applications')->where('id','=',Auth::User()->id)->where('response','=',1)->get();

        Session()->put('app_stat',$data);
        }

        return view('makepayment');
    }

    function validatepayment(Request $req){
        $req->validate([
            'cardnumber' => 'required|min:19|max:19',
            'cardholder' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvc' => 'required|min:3|max:3'
        ]);

        
        $data=DB::table('applications')->where('id','=',Auth::User()->id)->where('response','=',1)->get();
      
        // $coursetotal= 0;
        foreach($data as $course)
        {
            if($course->response == '1')
            { 
                $studentcourse = $course->student_course;
                $coursetotal = $course->cost;
                $paid = '1';
                $cost = $course->cost;
                
        payment_info::create([
            'id' => Auth::User()->id,
            'student_name' => ucfirst(Auth::user()->Firstname) . ' ' . ucfirst(Auth::user()->lastname),
            'course_name'=> $studentcourse,
            'amountpaid'=> $coursetotal,
            'cardnumber' => $req->cardnumber,
            'cardholder' =>$req->cardholder,
            'expiry_date' =>$req->month.$req->year, 
            'cvc' => $req->cvc,
            'paid' => $paid,
            'course_cost' => $cost
        ]);
            }

        }
        DB::table('applications')->where('id','=',Auth::User()->id)->where('response','=','1')->update(['paid'=>1]);
        $data=DB::table('applications')
        ->where('id','=',Auth::User()->id)
        ->where('paid','=',1)->delete();

   
       return view('paymentsuccess');
    }

   

    function viewpayment(){

        $count=DB::table('payment_infos')->where('id','=',Auth::User()->id)->where('paid','=',1)->count();
        // dd($count);
        if($count<1){
         
        Session()->put('payment_count',"nopayment");
        }
        elseif($count>=1){
            Session()->put('payment_count',"payment");
        $data=DB::table('payment_infos')->where('id','=',Auth::User()->id)->get();
        $userdata=DB::table('users')->where('id','=',Auth::User()->id)->get();
        
        Session()->put('pmtdetail',$data);
        Session()->put('userdetail',$userdata);
        }
        return view('studentpaymentview');
    }


}
