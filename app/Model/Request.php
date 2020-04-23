<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Request
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $content
 * @property int|null $from_user
 * @property int|null $to_user
 * @property string|null $response
 * @property string|null $status
 * @property string|null $created_at
 * @property string|null $replied_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request whereFromUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request whereRepliedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request whereResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Request whereToUser($value)
 * @mixin \Eloquent
 */
class Request extends Model
{
    //
    protected $table = "request";
    protected $fillable = [
        'name', 'content', 'from_user', 'to_user', 'response', 'status', 'created_at', 'replied_at'
    ];
    public $timestamps = false;
}
