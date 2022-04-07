<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Models\StudentInformation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
// use App\Http\Controllers\student\StudentAuthController;

class StudentAuthController extends Controller
{
    public function showLogin(){
        
        return view('frontEnd.auth.login');
    }
    public function login(Request $request){

    $studentID = $request->studentID;
    $password = $request->password; // password form the login form 
    $studentCheck= StudentInformation::where('studentID',$studentID)->exists();
    // dd($studentCheck);
    if ($studentCheck) {
            
    $existingPassword = StudentInformation::select('password')->where('studentID',$studentID)->first();
    
    
    $existingPassword = $existingPassword->password;
    
    $check = Hash::check($password, $existingPassword);
    if($check){
        Session::put('studentID',$studentID); 

        return redirect()->route('student.dashboard') ;
            }
    else{
         toast('Invalid STUDENT ID/PASSWORD','error');
         return redirect()->route('student.login');
        } 
    }
    else {
        toast('No Records Found','error');
        return redirect()->back();
           }
    }
    public function studentDashboard(){
        return view('layouts.frontEnd.dashboard');
    }
    public function settings(){
        // $student = StudentInformation::where('studentID',session()->get('studentID'))->get();
        // return $student;
        return view('frontEnd.profile.settings');

    }
    public function updateImage(Request $request){
        $request->validate([
            'image'=>'required'
        ]);
        $img=Image::make($request->image);
        $img->resize(150,150)->encode('png');
        $path = public_path('files/student/image/').session()->get('studentID').'.png';
        $img->save($path);
        StudentInformation::where('studentID',session()->get('studentID'))->update(['image'=>session()->get('studentID').'.png']);
        toast('Image update successfully','success');
        return redirect()->route('student.dashboard');
    }
    public function logout(){
    Session::flush();
    toast ('Logged out Successfully','success');
    return redirect()->route('student.login');
    }

    public function view(){
        $student= \App\Models\StudentInformation::where('studentID',session()->get('studentID'))->first();
        return view('frontEnd.profile.view',compact('student'));
    }
}
