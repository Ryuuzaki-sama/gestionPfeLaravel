<?php

namespace App\API;

use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    protected $guarded = [];

    public function entreprise()
    {
        return $this->belongsTo('App\API\Entreprise');
    }

    public function pays()
    {
        return $this->belongsTo('App\API\PaysList');
    }

    public function ville()
    {
        return $this->belongsTo('App\API\Ville');
    }

    public function permis()
    {
        return $this->belongsTo('App\API\PermisList');
    }

    public function situation_familial()
    {
        return $this->belongsTo('App\API\SituationFamilial');
    }

    public function fonction()
    {
        return $this->belongsTo('App\API\Fonction');
    }

    public function instructions()
    {
      return $this->hasMany('App\API\Instruction');

    }

    public function promotions()
    {
      return $this->hasMany('App\API\Promotion');

    }
}
