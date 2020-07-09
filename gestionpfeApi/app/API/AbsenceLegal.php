<?php

namespace App\API;

use Illuminate\Database\Eloquent\Model;

class AbsenceLegal extends Model
{
    protected $guarded = [];

    public function salaries() {
        return $this->hasMany('App\API\Salarie');
    }
    
    public function absenceReasons(){
        return $this->hasMany('App\API\AbsenceReason');
    }
}
