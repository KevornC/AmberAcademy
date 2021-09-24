<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(){
//        
        $role=Auth::user()->role;
        if($role == '1'){
            return view('admin\dashboard');
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
