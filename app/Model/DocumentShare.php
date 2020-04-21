<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
