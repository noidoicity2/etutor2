<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\TutorRegistration
 *
 * @property tutor_id
 * @property student_id
 * @property int $id
 * @property int|null $tutor_id
 * @property int|null $student_id
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $status_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\DocumentShare[] $SharedDocument
 * @property-read int|null $shared_document_count
 * @property-read \App\Model\User|null $createdby
 * @property-read \App\Model\User|null $student
 * @property-read \App\Model\User|null $tutor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration whereTutorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TutorRegistration whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class TutorRegistration extends Model
{
    //
    protected $table = "tutor_registrations";
    protected $fillable = [
    'tutor_id','student_id','created_by','updated_by','updated_at',
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
    public function SharedDocument() {
        return $this->hasMany('App\Model\DocumentShare', 'user_id', 'student_id');

    }
    public function UnseenMessageOfStudent() {
        return $this->hasMany('App\Model\Message', 'from_user', 'student_id')
            ->where('status_id','=',4)->where('to_user','=', \Auth::id()) ;

    }


}
