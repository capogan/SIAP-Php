<?php

namespace App\Http\Controllers;

use App\SyaratAturan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $term_of_condition;
    public function __construct() {

        $this->term_of_condition = SyaratAturan::where('status',true)->orderBy('sequence','ASC')->get();
        View::share ( 'term_of_condition', $this->term_of_condition);
    }
}
