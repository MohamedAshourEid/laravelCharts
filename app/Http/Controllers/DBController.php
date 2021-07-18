<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    //
    function index(){
        return DB::select('select * from Users',[1]);
//        return DB::table("User")->get();
//        return "hello";
    }
}
