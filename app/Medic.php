<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    protected $fillable = [
        // 'url', 'slug', 'product_id', 
            'nombre',
            'apellidos',
            'direccion',
            'cedula',

    ];

    public function antecedent()
    {
        return $this->hasMany('App\Antecedent');
    }

    public function functionalexamination()
    {
        return $this->hasMany('App\FunctionalExamination');
    }

    public function identification()
    {
        return $this->hasMany('App\Identification');
    }

    public function psicologicalhabit()
    {
        return $this->hasMany('App\Psicologicalhabit');
    }

}
