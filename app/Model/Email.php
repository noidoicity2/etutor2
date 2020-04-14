<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $table = "email";
    protected $fillable = [
        'name','title','content','to_user','created_at','status',
    ];
}
