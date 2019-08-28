<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Session;
use App\SessionList;

class SessionController extends Controller
{

    public function displayDetail($id, $id2)
    {  
        $course = new Course();
        $course = Course::find($id);

        $session = new Session();
        $session = Session::find($id2);

        $sessionList = new SessionList();
        $sessionList = SessionList::where('sessionID', $id2) -> get();
        

        return view('courses.session', compact('session', 'course', 'sessionList'));
    }


}
