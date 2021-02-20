<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PsicologicalHabits extends Model
{
    protected $fillable = [
        // 'url', 'slug', 'product_id', 
            'tabaquicos',
            'alcoholicos',
            'cafeinicos',
            'drogas',
            'hooka',
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
