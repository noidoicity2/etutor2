<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Message
 *




 * @property int $id
 * @property int|null $from_user
 * @property int|null $to_user
 * @property string|null $chat_message
 * @property string|null $created_at
 * @property int|null $status_id
 * @property-read \App\Model\User $receiver
 * @property-read \App\Model\User|null $sender
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Message whereChatMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Message whereFromUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Message whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Message whereToUser($value)
 * @mixin \Eloquent
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
