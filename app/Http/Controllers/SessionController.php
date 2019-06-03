<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
        return view('sessions.create');
    }

    public function store(Request $request){
        $credentials=$this->validate($request,[
            'email'=>'required|email|max:255',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            session()->flash('success','欢迎回来');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            session()->flash('danger','抱歉，登录失败');
            return redirect()->back()->withInput();
        }

    }
}
