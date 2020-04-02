<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string email
 * @property string password
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
        'name', 'gender', 'dob', 'email', 'password', 'image', 'created_by', 'created_at', 'updated_by', 'updated_at', 'password', 'status_id', 'active', 'role_id', 'remember_token'
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

    public function  tutorRegistrationByTutor() {
        return $this->hasMany('App\Model\TutorRegistration', 'tutor_id', 'id');
    }

    public function  tutorRegistrationByStudent() {
        return $this->hasMany('App\Model\TutorRegistration', 'student_id', 'id');
    }

}
