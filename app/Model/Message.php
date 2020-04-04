<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = "message";
    protected $fillable = [
        'from_user', 'to_user', 'chat_message', 'status_id'

    ];
    public function sender() {
        return $this->belongsTo('App\Model\User','from_user','id');
    }
    public function receiver() {
        return $this->belongsTo('App\Model\User','toUser','id');
    }
}
