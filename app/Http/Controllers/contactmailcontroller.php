<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactmail;


class contactmailcontroller extends Controller
{
    function send(Request $request){
      $details=[
        'name'=> $request->name,
        'email'=> $request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
      ];

        Mail::to('instituteja@gmail.com')->send(new contactmail($details));
      return redirect('/');
      
    }
  }
