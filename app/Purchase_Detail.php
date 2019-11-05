<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Detail extends Model
{
    protected $table = 'purchase__details';
     protected $fillable = [
        'quantity','price','subtotal', 'purchase_id', 'provider_id','product_id'
    ];

    public function product(){
        return $this->belongsTo('App\Product');
        
    }

    public function provider(){
        return $this->belongsTo('App\Provider');
        
    }
    public function purchase(){
        return $this->belongsTo('App\Purchase');
        
    }
}
