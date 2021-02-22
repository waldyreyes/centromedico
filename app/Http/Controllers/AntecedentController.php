<?php

namespace App\Http\Controllers;

use App\Antecedent;
use App\FunctionalExamination;
use App\Identification;
use App\Medic;
use App\Pacient;
use App\PsicologicalHabits;
use Illuminate\Http\Request;

class AntecedentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacient_id=1; //aqui tienes que traer el id del paciente
        $antecedente = Antecedent::where('pacient_id',$pacient_id)->orderBy('id')->paginate(10);
        $psico= PsicologicalHabits::where('pacient_id',$pacient_id)->orderBy('id')->paginate(10);
        $efuncional= FunctionalExamination::where('pacient_id',$pacient_id)->orderBy('id')->paginate(10);
        // return $antecedente;
        
        return view('antecedentes.index', compact('antecedente','psico', 'efuncional'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('antecedentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $ante= new Antecedent;
        $func=new FunctionalExamination;
        $ide= new Identification;
        $hab=new PsicologicalHabits;

       
        $medic_id =1;//ojo  variable temporal hasta que se ponga el id del medico logueado
        $pacient_id=1;//ojo  variable temporal hasta que se ponga el id del paciente
        
        $ante->hta= $request->hta;
        $ante->mellitus= $request->mellitus;
        $ante->evc=$request->evc;
        $ante->cardiopatiaisquemica=$request->cardiopatiaisquemica;
        $ante->insuficienciacardiaca=$request->insuficienciacardiaca;
        $ante->arritmias=$request->arritmias;
        $ante->eapca=$request->eapca;

        $ante->medic_id=$medic_id;
        $ante->pacient_id=$pacient_id;
      
        $ante->insuficienciarenal=$request->insuficienciarenal;
        $ante->sincope=$request->sincope;
        $ante->asmabronquial=$request->asmabronquial;
        $ante->eihe=$request->asmabronquial;
        $ante->hepatopatias=$request->hepatopatias;
        $ante->ulceraglastrica=$request->ulceraglastrica;
        $ante->convulciones=$request->convulciones;
        $ante->cancer=$request->cancer;
        $ante->tvp=$request->tvp;
        $ante->trastornostiroideos=$request->trastornostiroideos;
        $ante->traumasrecientes=$request->traumasrecientes;
        $ante->trastornospsiquiatricos=$request->trastornospsiquiatricos;
        $ante->sangradoenlafamilia=$request->sangradoenlafamilia;
        $ante->transfucionesprevias=$request->transfucionesprevias;
        $ante->consumohematinicos=$request->consumohematinicos;
        $ante->alergiaamedicamentos=$request->alergiaamedicamentos;
        $ante->otros=$request->otros;

        // hasata aqui el antecendete o expediente 

        // examen funcional
        $func->estadodeanimo= $request->estadodeanimo;
        $func->dolortoraxico= $request->dolortoraxico;
        $func->tos= $request->tos;
        $func->disnea= $request->disnea;
        $func->ortopnea= $request->ortopnea;
        $func->dpn= $request->dpn;
        $func->edemademsis= $request->edemademsis;
        $func->capacidadfuncional= $request->capacidadfuncional;

        $func->medic_id= $medic_id;
        $func->pacient_id= $pacient_id;
        // hasata aqui el examen funcional 

        // identificacion
        $ide->diagnostico=$request->diagnostico;
        $ide->intervencion=$request->intervencion;
        $ide->medic_id=$medic_id;
        $ide->pacient_id=$pacient_id;
        // hasta aqui identificacion

        //habitos psicologicos
        $hab->tabaquicos=$request->tabaquicos;
        $hab->alcoholicos=$request->alcoholicos;
        $hab->cafeinicos=$request->cafeinicos;
        $hab->drogas=$request->drogas;
        $hab->hooka=$request->hooka;

        $hab->medic_id=$medic_id;
        $hab->pacient_id=$pacient_id;

        //hasta aqui los habigos psicologicos
         $ant= Antecedent::where('pacient_id', $pacient_id)->count(); //para obtener el producto que ha comprado el usuario para la siguiente consulta
        
        if ($ant) {
            
            $antecedente = Antecedent::where('pacient_id',$pacient_id)->orderBy('id')->paginate(10);
            $psico= PsicologicalHabits::where('pacient_id',$pacient_id)->orderBy('id')->paginate(10);
            $efuncional= FunctionalExamination::where('pacient_id',$pacient_id)->orderBy('id')->paginate(10);
            // return $antecedente;
            
            return view('antecedentes.index', compact('antecedente','psico', 'efuncional'));
            
        } else {
            # code...

            $ante->save();//para guardar el antecedente o expediente
            $func->save(); //para guardar el examen funcional
            $ide->save();//para guardar la identificacion
            $hab->save();//para guardar los habitos psicologicos

            return redirect()->route('antecedentes.create')->with('datos','Registro creado correctamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Antecedent  $antecedent
     * @return \Illuminate\Http\Response
     */
    public function show(Antecedent $antecedent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Antecedent  $antecedent
     * @return \Illuminate\Http\Response
     */
    public function edit(Antecedent $antecedent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Antecedent  $antecedent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antecedent $antecedent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Antecedent  $antecedent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antecedent $antecedent)
    {
        //
    }
}
