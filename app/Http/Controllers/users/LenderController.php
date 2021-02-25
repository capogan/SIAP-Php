<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LenderController extends Controller
{
    function my_profile(Request $request){

        $data = [
            'sliders' => 'no'
        ];
        return view('templates.users.profile',['data'=>$data]);

    }
}
