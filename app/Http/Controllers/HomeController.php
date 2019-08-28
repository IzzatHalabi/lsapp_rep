<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\EnrolledCourseList;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = auth() -> user() -> id;
        $user = User::find($user_id);
        $enrolled = EnrolledCourseList::all();
        
        return view('home') -> with('enrolled', $enrolled) -> with('user', $user);
    }
}
