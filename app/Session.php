<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    protected $table = "sessions";
    protected $fillable = ['session_topic','count'];

    public $timestamps=false;
}
