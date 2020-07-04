<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $guarded = [];

    public function salaries()
    {
        return $this->hasMany('App\Salarie');
    }
}
