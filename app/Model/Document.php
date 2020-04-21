<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
