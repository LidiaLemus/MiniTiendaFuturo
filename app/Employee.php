<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['fullname','email','address','phone','nit'];

    public function sales(){
    	return $this->hasMany('App\Sale');
    }

}
