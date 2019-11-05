<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['fullname','address','phone','email','cui'];

    public function sales(){
    	return $this->hasMany('App\Sale');
    }

}
