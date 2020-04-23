<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\role
 *
 * @method static find(int $int)
 * @property int $id
 * @property string|null $name
 * @property string $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\role whereName($value)
 * @mixin \Eloquent
 */
class role extends Model
{
    //
    protected $table='roles';
    protected $fillable= [
        'name', 'description',
    ];
    public function users() {
        return $this->hasMany('App\Model\User' , 'role_id', 'id');
    }
}
