<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function index(Request $req){
        session()->put("date",$req->input());
        return redirect("profile");

    }
}
