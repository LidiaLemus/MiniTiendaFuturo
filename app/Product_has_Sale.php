<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_has_Sale extends Model
{
    protected $table = 'product_has_sales';
    protected $fillable = [
        'price','quantity','subtotal', 'sale_id', 'product_id'
    ];

    public function product(){
    	return $this->belongsTo('App\Product');
    }
    public function sale(){
    	return $this->belognsTo('App\Sale');
    }
}
