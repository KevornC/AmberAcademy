<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Models\application;
use App\Models\course;

class HomeController extends Controller
{
    function index(){
//
        $role=Auth::user()->role;
        if($role == '1'){
            $app=application::where('response','=','2')->count();
            $approve=application::where('response','=','1')->count();
            $all=application::where('id','!=','')->count();
            $course=course::where('course_id','!=','')->count();
            return view('admin/dashboard',compact('app','approve','all','course'));
        }else{
            return view('dashboard');
        }
    }

    public function media(){
        return view('media');
    }
    public function contactus(){
        return view('contact');
    }

    public function aboutus(){
        return view('aboutus');
    }

}
