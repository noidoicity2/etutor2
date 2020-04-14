<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $table = "email";
    protected $fillable = [
        'title','content','to_user','created_at','status',
    ];
    public $timestamps = false;
}
