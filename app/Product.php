<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table = 'products';
    protected $fillable = ['code','name','quantity','sale_price','purchase_price','is_active'];
  
    public function product_has_sales(){
    	return $this->hasMany('App\Product_has_Sale');
    }
    public function purchase_details(){
        return $this->hasMany('App\Purchase_Detail');

    }
   
}
