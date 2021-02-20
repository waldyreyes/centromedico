<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    protected $fillable = [
        // 'url', 'slug', 'product_id', 
        'diagnostico',
        'intervencion',
        'medic_id',
        'pacient_id',
    ];

    public function pacient()
    {
        return $this->belongsTo('App\Pacient');
    }

    public function medic()
    {
        return $this->belongsTo('App\Medic');
    }
}
