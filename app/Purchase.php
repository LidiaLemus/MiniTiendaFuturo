<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purcharses';
    protected $fillable = [
        'date','quantity','description'
    ];

    public function purchase_details(){
    	return $this->hasMany('App\Purchase_Detail');
    }
}
