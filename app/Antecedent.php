<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antecedent extends Model
{
    protected $fillable = [
        // 'url', 'slug', 'product_id', 
        'hta',
        'mellitus',
        'evc',
        'cardiopatiaisquemica',
        'insuficienciacardiaca',
        'arritmias',
        'eapca',

        'medic_id',
        'pacient_id',
      
        'insuficienciarenal',
        'sincope',
        'asmabronquial',
        'eihe',
        'hepatopatias',
        'ulceraglastrica',
        'convulciones',
        'cancer',
        'tvp',
        'trastornostiroideos',
        'traumasrecientes',
        'trastornospsiquiatricos',
        'sangradoenlafamilia',
        'transfucionesprevias',
        'consumohematinicos',
        'alergiaamedicamentos',
        'otros',
        
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
