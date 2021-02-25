<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SyaratAturan extends Model
{
    protected $table = 'tnc';
    protected $fillable = [
        'id','term','sequence','status','created_at','updated_at'
    ];
}
