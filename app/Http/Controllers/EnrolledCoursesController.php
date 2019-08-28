<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnrolledCourseList;
use App\Course;
use App\User;

class EnrolledCoursesController extends Controller
{

    public function searchEnrolled()
    {
      $user_id = auth() -> user() -> id;
      $user = User::find($user_id);
      $courses = new Course();
      $courses = Course::all();
      $enCourseList = EnrolledCourseList::all();
      
      return view('courses.enrolled', compact('user', 'courses', 'enCourseList'));
    }


    public function addTo($id)
    {
        $newEnrolled = new EnrolledCourseList;

        $newEnrolled->courseID = $id;
        $newEnrolled->id = auth()->user()->id;
        $newEnrolled->save();

        return view('courses.registered');
    }

    
}
