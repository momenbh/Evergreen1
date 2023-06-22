<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){

        return view('admin.login.admin_login');
    }
    public function dologin(Request $request){
        // dd($request->all());
        $credentials=$request->only(['email','password']);
        // dd($credentials);
        if(Auth::attempt($credentials))
        {

            // dd(auth()->attempt($credentials));
            // echo "<pre>";
            // print_r($credentials);
            // exit;
            
            
            return redirect()->route('dashboard.project')->with('message','login successfully');
            
        }
         else{
            
            return redirect()->back()->with('message','incorrect information');
         }
        
    }
     public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
     }
}
