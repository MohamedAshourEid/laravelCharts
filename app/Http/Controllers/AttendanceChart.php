<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;

class AttendanceChart extends Controller
{
    //


    function getSessionsTopics(){
        return Session::select('session_topic')->get();
    }

    function getSessionsAttendanceCount(){
        return Session::select('count')->get();
    }

    function getSessionsData(){
        return array(
          'sessionsTopics' => $this->getSessionsTopics(),
          'count' => $this->getSessionsAttendanceCount()
        );
    }


}
