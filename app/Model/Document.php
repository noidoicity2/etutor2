<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Document
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $link
 * @property int|null $created_by
 * @property string|null $created_at
 * @property int|null $updated_by
 * @property string|null $updated_at
 * @property int|null $isPublic
 * @property int|null $status_id
 * @property-read \App\Model\User|null $tutor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document whereIsPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Document whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Document extends Model
{
    //
    protected $table = "documents";
    protected $fillable = [
        'name'	,'link'	,'created_by',	'created_at'	,'updated_by',	'updated_at'	, 'isPublic'	,'status_id'
    ];
    public $timestamps = false;
    public function tutor() {
        return $this->belongsTo('App\Model\user', 'created_by','id');
    }
}
