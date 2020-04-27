<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    protected $table = "meeting";
    protected $fillable = [
    'name','tutor_id','student_id','link','start_at','created_by','created_at','status_id'
    ];
    public $timestamps = false;
    public function tutor() {
        return $this->belongsTo('App\Model\user', 'tutor_id','id');
    }
    public function student() {
        return $this->belongsTo('App\Model\user', 'student_id','id');
    }
    public function createdby() {
        return $this->belongsTo('App\Model\user', 'created_by','id');
    }

}
