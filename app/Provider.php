<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    protected $fillable = [
        'fullname','phone','email', 'company_id'
    ];

    public function company(){
    	return $this->belongsTo('App\Company');
    }
    public function purcharseDetail(){
    	return $this->hasMany('App\Purchase_Detail');
    }
}
