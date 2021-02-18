<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){

    }

    function register(){

        return view('templates.users.register');
    }
    function login(){

        return view('templates.users.login');
    }
}
