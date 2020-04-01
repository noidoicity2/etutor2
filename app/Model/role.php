<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    protected $table='roles';
    protected $fillable= [
        'name', 'description',
    ];
    public function users() {
        return $this->hasMany('App\Model\User' , 'role_id', 'id');
    }
}
