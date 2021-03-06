<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['fullname','email','address','phone','nit','is_active'];

    public function sales(){
    	return $this->hasMany('App\Sale');
    }
   
}
