<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Detail extends Model
{
    protected $table = 'purcharse_details';
     protected $fillable = [
        'quantity','price','subtotal', 'purchase_id', 'provider_id','product_id'
    ];

}
