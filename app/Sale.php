<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    
    protected $table = 'sales';
    protected $fillable = [
        'total','employee_id', 'customer_id'
    ];
    public function product_has_sales(){
    	return $this->hasMany('App\Product_has_Sale');
    }

    public function customer(){
        return $this->belongsTo('App\Customer');
        
    }
    public function employee(){
        return $this->belongsTo('App\Employee');
        
    }

}
