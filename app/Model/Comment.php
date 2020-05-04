<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Comment
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $comment
 * @property int|null $document_id
 * @property string|null $created_at
 * @property-read \App\Model\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Comment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Comment whereDocumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Comment whereUserId($value)
 * @mixin \Eloquent
 */
class Comment extends Model
{
    //
    protected $table = "comment";
    protected $fillable = [
        'user_id'	,'comment'	,'document_id',	'created_at'
    ];
    public $timestamps = false;
    public function user() {
        return $this->belongsTo('App\Model\User', 'user_id','id');
    }
}
