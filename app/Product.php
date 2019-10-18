<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table = 'products';
    protected $fillable = ['code','name','sale_price','purchase_price'];

    public function product_has_sales(){
    	return $this->hasMany('App\Product_has_Sale');
    }
    public function purchase_details(){
        return $this->hasMany('App\Purchase_Detail');

    }
    public function stocktakings(){
        return $this->hasMany('App\Stocktaking');
    }
    
}
