<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=['name','address','township','no_of_employee','facebook','instagram','logo','banner','visi_misi','what_do','culture'];

    public function jobs($value='')
   {
   		return $this->hasMany('App\Job');
   }
}
