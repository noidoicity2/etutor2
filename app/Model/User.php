<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * App\Model\User
 *
 * @property string email
 * @property string password
 * @property string name
 * @property string|null image
 * @property mixed dob
 * @method static where(string $string, int $int)
 * @property int $id
 * @property int|null $gender
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $status_id
 * @property int|null $active
 * @property int $role_id
 * @property string|null $remember_token
 * @property string|null $last_activity
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Document[] $document
 * @property-read int|null $document_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Message[] $receivedMessages
 * @property-read int|null $received_messages_count
 * @property-read \App\Model\role $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Message[] $sentMessages
 * @property-read int|null $sent_messages_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\DocumentShare[] $sharedDocument
 * @property-read int|null $shared_document_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\TutorRegistration[] $tutorRegistrationByStudent
 * @property-read int|null $tutor_registration_by_student_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\TutorRegistration[] $tutorRegistrationByTutor
 * @property-read int|null $tutor_registration_by_tutor_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereLastActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    //
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'gender', 'dob', 'email', 'password', 'image', 'created_by', 'created_at', 'updated_by', 'updated_at', 'password', 'status_id', 'active', 'role_id', 'remember_token', 'last_activity'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role()
    {
        return $this->belongsTo('App\Model\role', 'role_id', 'id');
    }

    public function tutorRegistrationByTutor()
    {
        return $this->hasMany('App\Model\TutorRegistration', 'tutor_id', 'id');
    }

    public function tutorRegistrationByStudent()
    {
        return $this->hasMany('App\Model\TutorRegistration', 'student_id', 'id');
    }

    public function sentMessages()
    {
        return $this->hasMany('App\Model\Message', 'from_user', 'id');
    }

    public function receivedMessages()
    {
        return $this->hasMany('App\Model\Message', 'to_user', 'id');
    }

    public function sharedDocument()
    {
        return $this->hasMany('App\Model\DocumentShare', 'user_id', 'id');
    }

    public function document()
    {
        return $this->hasMany('App\Model\Document', 'created_by', 'id');
    }

}
