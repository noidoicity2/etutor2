<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    protected $table = "tutor_registrations";
    protected $fillable = [
    'name','tutor_id','student_id','link','start_at','created_by','created_at','status_id'
    ];
    public function tutor() {
        return $this->belongsTo('App\Model\user', 'tutor_id','id');
    }
    public function student() {
        return $this->belongsTo('App\Model\user', 'student_id','id');
    }
    public function createdby() {
        return $this->belongsTo('App\Model\user', 'created_by','id');
    }
    public function status() {
        return $this->belongsTo('App\Model\status', 'status_id','id');
    }
}
