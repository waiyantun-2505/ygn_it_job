<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable=['name','description','start_date','end_date','requirement','gender','township','careerlevel','salary','exp_yrs','category_id','company_id','is_feature','is_active'];

    public function category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
    public function company($value='')
    {
    	return $this->belongsTo('App\Company');
    }

    public function seekers($value='')
    {
    	return $this->belongsToMany('App\Seeker')
    				->withTimestamps();
    }
    
}
