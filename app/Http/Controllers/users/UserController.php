<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    function login(){
        $data = [
            'sliders' => 'no'
        ];
        return view('templates.users.login',['data'=>$data]);
    }
    function register(){
        $data = [
            'sliders' => 'no'
        ];
        return view('templates.users.register',['data'=>$data]);
    }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('/users/login');
    }

}
