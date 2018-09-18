<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index(){
        if(Auth::check()){
            return redirect()->intended('admin');
        }else{
            return view('login');
        }
    }

    public function authenticate(Request $request){

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(['msg'=>'Updated Successfully', 'success'=>true]);
        }else{
            return response()->json(['msg'=> $request->username, 'success'=>true]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('login');
    }
}