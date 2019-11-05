<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    protected $fillable = [
        'date','description','total'
    ];

    public function purchase_details(){
    	return $this->hasMany('App\Purchase_Detail');
    }
}
