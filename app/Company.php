<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $table = 'companies';
    protected $fillable = ['name', 'nit', 'address', 'email', 'phone', 'is_active'];

    public function providers()
    {
        return $this->hasMany('App\Provider');
    }
}
