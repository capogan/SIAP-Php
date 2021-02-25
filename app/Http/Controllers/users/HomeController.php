<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\SyaratAturan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    function index(){

        $data = [
            'sliders' => 'yes',
        ];

        return view('templates.pages.index',['data'=>$data]);
    }

    function market_place(){
        $data = [
            'sliders' => 'yes'
        ];
        return view('templates.pages.market_place',['data'=>$data]);
    }
}
