<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunctionalExamination extends Model
{
    protected $fillable = [
        // 'url', 'slug', 'product_id', 
        'estadodeanimo',
        'dolortoraxico',
        'tos',
        'disnea',
        'ortopnea',
        'dpn',
        'edemademsis',
        'capacidadfuncional',

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
