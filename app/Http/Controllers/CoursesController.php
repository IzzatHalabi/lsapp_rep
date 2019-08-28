<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Session;
use App\SessionList;
use App\EnrolledCourseList;

class CoursesController extends Controller
{
 
    public function searchCourse()
    {   
        $courses = new Course();
        $courses = Course::all();
        
        return view('courses.index', compact('courses'));
    }


    public function displayDetail($id)
    {

        $enCourseList = new EnrolledCourseList();
        $enCourseList = EnrolledCourseList::all();

        $course = new Course();
        $course = Course::find($id);
        
        $sessionList = new SessionList();
        $sessionList = SessionList::all();

        $sessions = new Session();
        $sessions = Session::all();

        $session = new Session();

        $access = false;
        
        return view('courses.detail', 
            compact('enCourseList', 'course', 'sessionList', 'sessions', 'session', 'access'));
    
    }


}
