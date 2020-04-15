<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $table = "request";
    protected $fillable = [
        'name', 'content', 'from_user', 'to_user', 'response', 'status', 'created_at', 'replied_at'
    ];
    public $timestamps = false;
}
