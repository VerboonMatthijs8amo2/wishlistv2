<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\facades\URL;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
class UserController extends Controller
{
    function index(){
        return view('login');
    }

    function checklogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        if(Auth::attempt($user_data)){
            return redirect('admin');
        }else{
            return back()->with('error', 'wrong login details');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
    function store(request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $hashed = Hash::make($password);
        $email = $request->input('email');
        DB::insert('insert into users (name,password,email) VALUES(?,?,?)', [$username,$hashed,$email]);
        if($request->method() == 'POST'){
            return redirect('login');
        }

    }
}
