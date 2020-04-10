<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Message extends Model
{
    //
    protected $table = "meeting";
    protected $fillable = [
        'name', 'tutor_id', 'student_id', 'link','start_at','created_by','created_at','status_id'

    ];
    public $timestamps = false;
    public function tutor() {
        return $this->belongsTo('App\Model\User','tutor_id','id');
    }
    public function student() {
        return $this->belongsTo('App\Model\User','student_id','id');
    }
    public function status() {
        return $this->belongsTo('App\Model\Status','status_id','id');
    }
}
