<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seeker extends Model
{
    protected $fillable = ['user_id','phone','address','gender','photo','cv'];

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }

     public function jobs($value='')
    {
        return $this->belongsToMany('App\Job')
                    ->withTimestamps();
    }


}
