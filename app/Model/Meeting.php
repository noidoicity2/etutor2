<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    protected $table = "meeting";
    protected $fillable = [
    'name','tutor_id','student_id','link','start_at','created_by','created_at','status', 'document_id' , 'place',
    ];
    public $timestamps = false;
    public function tutor() {
        return $this->belongsTo('App\Model\User', 'tutor_id','id');
    }
    public function student() {
        return $this->belongsTo('App\Model\User', 'student_id','id');
    }
    public function createdby() {
        return $this->belongsTo('App\Model\User', 'created_by','id');
    }
    public function document() {
        return $this->belongsTo('App\Model\Document', 'document_id','id');
    }

}
