<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use function React\Promise\reduce;

class UserController extends Controller
{
    public function logout(){ 
        Auth::logout();
        Session::flush();
        return redirect()-> route('login');
    }

    public function profile(){
        return view('backEnd.user.profile');
    }
    public function edit($userID){
        // return $userID;
        // toast('Your Post as been submited!','success');
        $user= User::find($userID);
        // return $user;
        return view('backEnd.user.edit',compact('user'));
    }
    public function update(Request $request,$userID){
        // return $userID;
        $request->validate([
            // 'password'=>'required||min:6||confirmed'
            'password'=>'required||min:6||confirmed'
        ]); 
        User::where('id',$userID)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
    ]);
    toast('Your Post as been updated!','success');
    return redirect()->route('user.profile');
    }
}
