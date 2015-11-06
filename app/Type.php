<?php

namespace scm;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
    * Function for the relation one type has many user
    *
    * @var -
    */
    public function user(){
    	return $this->hasMany('scm\User', 'id');
    }
}
