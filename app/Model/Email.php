<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Email
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property int|null $to_user
 * @property string $created_at
 * @property int|null $status
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Email newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Email newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Email query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Email whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Email whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Email whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Email whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Email whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Email whereToUser($value)
 * @mixin \Eloquent
 */
class Email extends Model
{
    //
    protected $table = "email";
    protected $fillable = [
        'title','content','to_user','created_at','status',
    ];
    public $timestamps = false;
}
