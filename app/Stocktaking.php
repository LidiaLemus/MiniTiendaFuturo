<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stocktaking extends Model
{
    protected $table = 'stocktakings';
    protected $fillable = [
        'quantity','description','product_id'
    ];
    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
