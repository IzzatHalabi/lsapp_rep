<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';
    protected $primaryKey = 'courseID';
    protected $fillable = ['nameCourse', 'created_at', 'updated_at'];

    public function course_lists(){
        return $this->belongsTo('App\CourseList');
    }

    public function enrolled_course_lists(){
        return $this->belongsToMany('App\EnrolledCourseList');
    }

    public function session_lists(){
        return $this->hasMany('App\SessionList');
    }


}
