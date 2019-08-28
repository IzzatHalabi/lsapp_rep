<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionList extends Model
{
    protected $table = 'session_lists';
    protected $primaryKey = 'sessionListID';
    protected $fillable = ['courseID', 'sessionID'];

    public function sessions(){
        return $this->hasMany('App\Session');
    }

    public function courses(){
        return $this->belongsTo('App\Course');
    }


    static public function lookUpSessionList(&$session, $id){
        $session = Session::find($id);
        return ;
    }

}
