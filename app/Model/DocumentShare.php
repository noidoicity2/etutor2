<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\DocumentShare
 *
 * @property int $id
 * @property int|null $document_id
 * @property int|null $user_id
 * @property string|null $created_date
 * @property-read \App\Model\Document|null $document
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\User[] $sharedUser
 * @property-read int|null $shared_user_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DocumentShare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DocumentShare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DocumentShare query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DocumentShare whereCreatedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DocumentShare whereDocumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DocumentShare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DocumentShare whereUserId($value)
 * @mixin \Eloquent
 */
class DocumentShare extends Model
{
    //
    protected $table = "document_share";
    protected $fillable = [
        'document_id'	,'user_id'
    ];
    public $timestamps = false;
    public function document() {
        return $this->belongsTo('App\Model\Document', 'document_id','id');
    }
//    public function author() {
//        return $this->belongsTo('App\Model\User', 'document_id','id');
//    }
    public function sharedUser() {
        return $this->hasMany('App\Model\User' , 'user_id', 'id');
    }
}
