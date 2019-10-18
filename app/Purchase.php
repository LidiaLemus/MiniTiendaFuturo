<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purcharses';
    protected $fillable = [
        'date','quantity','description'
    ];
}
