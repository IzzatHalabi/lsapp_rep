<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseList extends Model
{
    protected $table='course_lists';
    protected $primaryKey = 'courseListID';
    protected $fillable = ['courseID', 'id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function courses(){
        return $this->hasMany('App\Course');
    }

    
    static public function searchCourse(){
        return '/courses';
    }
}
