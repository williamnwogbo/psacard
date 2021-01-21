<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function login(){
        return view('login');
    }

    public function post_login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        $request_data = $request->all();

        //check if it is a client
        unset($request_data['_token']);

        if(auth()->attempt($request_data)){

            return redirect()->to('/dashboard');
        }

        session()->flash('alert-danger',"Invalid Credenitals");

        return back();

    }

    public function logout(){
        auth()->logout();

        return redirect()->to('/');
    }
}
