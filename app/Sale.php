<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = [
        'date','total','employee_id', 'customer_id'
    ];
    public function product_has_sales(){
    	return $this->hasMany('App\Product_has_Sale');
    }

    public function customer(){
        return $this->belogsTo('App\Customer');
        
    }
    public function employee(){
        return $this->belogsTo('App\Employee');
        
    }

}
