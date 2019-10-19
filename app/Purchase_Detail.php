<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Detail extends Model
{
    protected $table = 'purchase_details';
     protected $fillable = [
        'quantity','price','subtotal', 'purchase_id', 'provider_id','product_id'
    ];

    public function product(){
        return $this->belogsTo('App\Product');
        
    }

    public function provider(){
        return $this->belogsTo('App\Provider');
        
    }
    public function purchase(){
        return $this->belogsTo('App\Purchase');
        
    }
}
