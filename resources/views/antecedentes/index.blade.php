{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Expediente</h1>
@stop

@section('content')
el contenido para ver el expediente
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Expediente</h1>
@stop

@section('content')
    <div class="card card">
        <div class="card-body">
            <div class="row">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Identificación</h3>
                    </div>
                    <!-- /.card-header -->
                    
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="cedula">Fecha</label>
                                <input type="date" class="form-control" id="fecha" placeholder="2021/02/14" name="fecha" value="">
                            </div>

                            <div class="form-group col-sm-12 col-md-4">
                                <label for="cedula">Médico</label>
                                <input type="text" class="form-control" id="medico" placeholder="Dra. Reina Pacheco" name="medico" value="Dra. Reina Pacheco">
                            </div>
                            
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="cedula">Paciente</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ana Wilka Aquino" name="nombre" value="">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="cedula">Edad</label>
                                <input type="text" class="form-control" id="edad" placeholder="29 años" name="edad" value="">
                            </div>
                            <!--<div class="form-group col-sm-12 col-md-4">-->
                            <!--    <label for="cedula">Cédula</label>-->
                            <!--    <input type="text" class="form-control" id="cedula" placeholder="Cédula" name="cedula" value="">-->
                            <!--</div>-->
                            <!--<div class="form-group col-sm-12 col-md-4">-->
                            <!--    <label for="fecha_nacimiento">Fecha de nacimiento</label>-->
                                
                            <!--</div>-->
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="direccion">Cédula</label>
                                <input type="text" class="form-control" id="cedula" placeholder="057-0016447-7" name="cedula">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="telefono">Diagnóstico</label>
                                <input type="text" class="form-control"   id="telefono" placeholder="Embarazo de 37 semana" name="telefono" value="">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="celular">Intervención</label>
                                <input type="text" class="form-control" id="celular" placeholder="Cesárea" name="celular" value="">
                            </div> 
                </div>
            </div>
        </div>
    </div>

            
                {{-- <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Identificación</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                        contenido de la targf
                        </div>
                    </div>
                </div> --}}
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">ANTECEDENTES</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @foreach ($antecedente as $antecedentes)
                             
                                <b> HTA </b> <span class="badge bg-success text-dark">{{$antecedentes->hta}}</span>
                                <b>, DIABETES MELLITUS </b> <span class="badge bg-success text-dark">{{$antecedentes->mellitus}}</span>
                                <b>, EVC </b> <span class="badge bg-success text-dark">{{$antecedentes->evc}}</span>
                                <b>, CARDIOPATIA ISQUEMICA</b> <span class="badge bg-success text-dark">{{$antecedentes->cardiopatiaisquemica}}</span>
                                <b>, INSUFICIENCIA CARDIACA</b> <span class="badge bg-success text-dark">{{$antecedentes->insuficienciacardiaca}}</span>
                                <b>, ARRITMIAS</b> <span class="badge bg-success text-dark">{{$antecedentes->arritmias}}</span>
                                <b>, ENFERMEDAD ARTERIAL PERIFERICA Y CAROTIDEA</b> <span class="badge bg-success text-dark">{{$antecedentes->eapca}}</span>
                                <b>, ARRITMIAS</b> <span class="badge bg-success text-dark">{{$antecedentes->arritmias}}</span>
                                <b>, INSUFICIENCIA RENAL</b> <span class="badge bg-success text-dark">{{$antecedentes->insuficienciarenal}}</span>
                                <b>, SINCOPE</b> <span class="badge bg-success text-dark">{{$antecedentes->sincope}}</span>
                                <b>, ASMA BRONQUIAL</b> <span class="badge bg-success text-dark">{{$antecedentes->asmabronquial}}</span>
                                <b>, ENFERMEDADES INMUNOLOGICAS O HEMATOLOGICAS</b> <span class="badge bg-success text-dark">{{$antecedentes->eihe}}</span>
                                <b>, HEPATOPATIAS</b> <span class="badge bg-success text-dark">{{$antecedentes->hepatopatias}}</span>
                                <b>, ULCERA GASTRICA </b> <span class="badge bg-success text-dark">{{$antecedentes->ulceraglastrica}}</span>
                                <b>, CONVULCIONES </b> <span class="badge bg-success text-dark">{{$antecedentes->convulciones}}</span>
                                <b>, CANCER </b> <span class="badge bg-success text-dark">{{$antecedentes->cancer}}</span>
                                <b>, TVP </b> <span class="badge bg-success text-dark">{{$antecedentes->tvp}}</span>
                                <b>, TRASTORNOS TIROIDEOS </b> <span class="badge bg-success text-dark">{{$antecedentes->trastornostiroideos}}</span>
                                <b>, TRAUMAS RECIENTES </b> <span class="badge bg-success text-dark">{{$antecedentes->traumasrecientes}}</span>
                                <b>, TRASTORNOS PSIQUIATRICOS</b> <span class="badge bg-success text-dark">{{$antecedentes->trastornospsiquiatricos}}</span>
                                <b>, SANGRADO EN LA FAMILIA</b> <span class="badge bg-success text-dark">{{$antecedentes->sangradoenlafamilia}}</span>
                                <b>, TRANSFUCIONES PREVIAS</b> <span class="badge bg-success text-dark">{{$antecedentes->transfucionesprevias}}</span>
                                <b>, CONSUMO HEMATINICOS</b> <span class="badge bg-success text-dark">{{$antecedentes->consumohematinicos}}</span>
                                <b>, ALERGIA A MEDICAMENTOS</b> <span class="badge bg-success text-dark">{{$antecedentes->alergiaamedicamentos}}</span>
                                <b>, OTROS</b> <span class="badge bg-success text-dark">{{$antecedentes->otros}}</span>
 

                             @endforeach
                        
                        </div>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">HABITOS PSICOBIOLOGICOS</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @foreach ($psico as $psicos)
                                <b>TABAQUICOS</b> <span class="badge bg-success text-dark">{{$psicos->tabaquicos}}</span>
                                <b>, ALCOHOLICOS</b> <span class="badge bg-success text-dark">{{$psicos->alcoholicos}}</span>
                                <b>, CAFEINICOS</b> <span class="badge bg-success text-dark">{{$psicos->cafeinicos}}</span>
                                <b>, DROGAS</b> <span class="badge bg-success text-dark">{{$psicos->drogas}}</span>
                                <b>, HOOKA</b> <span class="badge bg-success text-dark">{{$psicos->hooka}}</span>
                                
                                       
                                
                                {{-- 
                                
                                
                                 --}}
                            @endforeach
                        </div>
                    </div>
                </div>

            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">EXAMEN FUNCIONAL</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($efuncional as $efuncionales)
                            <b>ESTADO DE ANIMO</b> <span class="badge bg-success text-dark">{{$efuncionales->estadodeanimo}}</span>
                            <b>DOLOR TORAXICO</b> <span class="badge bg-success text-dark">{{$efuncionales->dolortoraxico}}</span>
                            <b>TOS</b> <span class="badge bg-success text-dark">{{$efuncionales->tos}}</span>
                            <b>DISNEA</b> <span class="badge bg-success text-dark">{{$efuncionales->disnea}}</span>
                            <b>ORTOPNEA</b> <span class="badge bg-success text-dark">{{$efuncionales->ortopnea}}</span>
                            <b>DPN</b> <span class="badge bg-success text-dark">{{$efuncionales->dpn}}</span>
                            <b>EDEMA DE MS IS</b> <span class="badge bg-success text-dark">{{$efuncionales->edemademsis}}</span>
                            <b>CAPACIDAD FUNCIONAL</b> <span class="badge bg-success text-dark">{{$efuncionales->capacidadfuncional}}</span>
                            
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">EXAMEN FISICO</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        {{-- @foreach ($efuncional as $efuncionales)
                            <b>ESTADO DE ANIMO</b> <span class="badge bg-success text-dark">{{$efuncionales->estadodeanimo}}</span>
                            <b>DOLOR TORAXICO</b> <span class="badge bg-success text-dark">{{$efuncionales->dolortoraxico}}</span>
                            <b>TOS</b> <span class="badge bg-success text-dark">{{$efuncionales->tos}}</span>
                            <b>DISNEA</b> <span class="badge bg-success text-dark">{{$efuncionales->disnea}}</span>
                            <b>ORTOPNEA</b> <span class="badge bg-success text-dark">{{$efuncionales->ortopnea}}</span>
                            <b>DPN</b> <span class="badge bg-success text-dark">{{$efuncionales->dpn}}</span>
                            <b>EDEMA DE MS IS</b> <span class="badge bg-success text-dark">{{$efuncionales->edemademsis}}</span>
                            <b>CAPACIDAD FUNCIONAL</b> <span class="badge bg-success text-dark">{{$efuncionales->capacidadfuncional}}</span>
                            
                        @endforeach --}}
                    </div>
                </div>
            </div>




    </div>
                                
                            
                
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop