<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int from_user
 * @property int to_user
 * @property int status_id
 * @property string chat_message
 */
class Message extends Model
{
    //
    protected $table = "message";
    protected $fillable = [
        'from_user', 'to_user', 'chat_message', 'status_id','created_at'

    ];
    public $timestamps = false;
    public function sender() {
        return $this->belongsTo('App\Model\User','from_user','id');
    }
    public function receiver() {
        return $this->belongsTo('App\Model\User','toUser','id');
    }
}
