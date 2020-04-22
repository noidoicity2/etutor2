<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = "comment";
    protected $fillable = [
        'user_id'	,'comment'	,'document_id',	'created_at'
    ];
    public $timestamps = false;
    public function user() {
        return $this->belongsTo('App\Model\user', 'user_id','id');
    }
}
