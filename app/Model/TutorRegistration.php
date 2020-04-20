<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  tutor_id
 * @property  student_id
 */
class TutorRegistration extends Model
{
    //
    protected $table = "tutor_registrations";
    protected $fillable = [
    'tutor_id','student_id','created_by','updated_by','updated_at','status_id'
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
}
