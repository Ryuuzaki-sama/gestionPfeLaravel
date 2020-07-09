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
        return $this->hasMany('App\API\PermisList');
    }

    public function situation_familial()
    {
        return $this->belongsTo('App\API\SituationFamilial');
    }

    public function founction()
    {
        return $this->belongsTo('App\API\Founction');
    }

    public function instructions()
    {
      return $this->hasMany('App\API\Instruction');

    }

    public function promotions()
    {
      return $this->hasMany('App\API\Promotion');

    }
    public function suiviPros()
    {
      return $this->hasMany('App\API\SuiviPro');

    }
}
