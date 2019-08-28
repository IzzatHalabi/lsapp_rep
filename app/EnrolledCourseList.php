<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\User;

class EnrolledCourseList extends Model
{
    protected $table='enrolled_course_lists';
    protected $primaryKey = 'enCourseListID';
    protected $fillable = ['courseID', 'id'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function courses(){
        return $this->hasMany('App\Course');
    }


    static public function alreadyEnrolled($enCourseList, $course){
        $user_id= auth()->user()->id;
        if( ($enCourseList->id == $user_id) && ($enCourseList->courseID == $course->courseID))
            return true; 
        return false;
    }

    static public function hasAccess($access){
        return $access;
    }

    static public function permitAccess( &$access ){
        $access = true;
        return;
    }

    
}

