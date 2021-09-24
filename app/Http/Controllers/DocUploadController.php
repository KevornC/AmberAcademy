<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DocUploadController extends Controller
{
    // public function index(){
        // return view('welcome');
    //   }
    
 
      public function uploadFile(Request $req){
            
            $req->validate([
            'id_doc' => 'mimes:png,jpg,jpeg,pdf|max:2048|required',
            'trn_doc' => 'mimes:png,jpg,jpeg,pdf|max:2048|required',
            'qual_doc' => 'mimes:pdf|required'
            ]);


$check=DB::table('applications')
->where('student_course','=',$req->coursename)
->where('student_name','=',ucfirst(Auth::user()->Firstname) . ' ' . ucfirst(Auth::user()->lastname))
->count();
// dd($check);
   
   if($check==1){ 
       return redirect('studentcourse')->with('failure','You have already applied for this course. Please check your application status under the apply tab.');
}
else{

//propic upload
    
            $file_name = $req->image->getClientOriginalName();
            $image=$file_name;
            $req->file('image')->move('ProfilePhotos',$file_name);
            // dd($file_name);
            DB::table('users')->where('id','=',Auth::user()->id)->update(['image'=>$file_name]);
    

    //studentdocumentsupload 
            $data1  = new application(); 
            $data2 = new application(); 
            $data3  = new application(); 
            // $file=$req->file('student_doc');
            $id_filename=time().'.'.$req->file('id_doc')->getClientOriginalName();
            $trn_filename=time().'.'.$req->file('trn_doc')->getClientOriginalName();
            $qual_filename=time().'.'.$req->file('qual_doc')->getClientOriginalName();
            $req->file('id_doc')->move('docuploads',$id_filename);
            $req->file('trn_doc')->move('docuploads',$trn_filename);
            $req->file('qual_doc')->move('docuploads',$qual_filename);
            $data1->id_docs=$id_filename;
            $data2->trn_docs=$trn_filename;
            $data3->qual=$qual_filename;

           
            application::create([
                'id' => Auth::User()->id,
                'student_name' => ucfirst(Auth::user()->Firstname) . ' ' . ucfirst(Auth::user()->lastname),
                'student_course' => $req->coursename,
                'cost' => $req->stdcourse_cost,
                'course_time' => $req->coursetime,
                'start_date' => $req->start_month . '-' . $req->start_day . '-' . $req->start_year,
                'end_date' => $req->end_month . '-' . $req->end_day . '-' . $req->end_year,
                'id_doc' => $id_filename,
                'trn_doc' => $trn_filename,
                'qual_doc' => $qual_filename,
                'phone_number'=>Auth::user()->phone_number,
                'dob'=>Auth::user()->dob,
                'email'=>Auth::user()->email,
                'address'=>Auth::user()->address,
                'gender'=>Auth::user()->gender,
            ]);
            DB::table('applications')->where('id','=',Auth::user()->id)->update(['image'=>$image]);

    return redirect()->route('appstat');
        }
    }
            
}