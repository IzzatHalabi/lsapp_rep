<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'sessions';
    protected $primaryKey = 'sessionID';
    protected $fillable = ['topic', 'detail'];

    public function session_lists(){
        return $this->belongsToMany('App\SessionList');
    }


}
