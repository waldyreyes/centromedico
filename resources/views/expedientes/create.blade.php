@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Expediente</h1>
@stop

@section('content')
  <div class="card">
     <div class="card-body">
                <div class="container">
                        <div id="app">
                          

                                  <!-- general form elements -->
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
        {{-- </div> --}}
        <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Antecedentes</h3>
                              </div>
                              <!-- /.card-header -->
                              
                                <div class="card-body">
                                  <div class="row">
                                      
                                        
                                       <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">HTA</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hta" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hta"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>
                                {{-- </div>
                                </div> --}}
   <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Diabetes Mellitus</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mellitus" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mellitus" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

                                <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">EVC</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

                                  <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Cardiopatia Isquémica</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cardiopatiaisquemica" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cardiopatiaisquemica" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>    
                                  
        <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Insuficiencia Cardiaca</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="insuficienciacardiaca" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="insuficienciacardiaca" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Arritmias</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="arritmias" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="arritmias"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

                                  <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Enfermedad arterial periférica y carotidea</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="eapca" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="eapca"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>
                                  
                                  <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Insuficiencia renal</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="insuficienciarenal" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="insuficienciarenal"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

      <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Síncope</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sincope" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sincope"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

                                  <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Asma Bronquial</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="asmabronquial" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="asmabronquial"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>


<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Enfermedades Inmunológicas o hematológicas</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="eihe" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="eihe"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

    <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Hepatopatias</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hepatopatias" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hepatopatias" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>
<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Ulcera Glastrica, </label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ulceraglastrica"value="si">
                                        <label class="form-check-label" >Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ulceraglastrica"value="no" checked>
                                        <label class="form-check-label" >No</label>
                                      </div>
                          
                                    </div>
                                  </div>
                                  <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Convulciones</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="convulciones" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="convulciones" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Cáncer</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cancer" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cancer"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>
<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">TVP</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tvp" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tvp" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>
<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Trastornos Tiroideos</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trastornostiroideos" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trastornostiroideos" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>


<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Traumas Recientes</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="traumasrecientes" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="traumasrecientes" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Trastornos Psiquiatricos</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trastornospsiquiatricos" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trastornospsiquiatricos" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Historia de sangrado en la familia</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sangradoenlafamilia" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sangradoenlafamilia" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>


<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Transfuciones previas</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="transfucionesprevias" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="transfucionesprevias"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

<!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Consumo previo de hematinicos</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="consumohematinicos" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="consumohematinicos" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

                                  <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Alergia a medicamentos</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="alergiaamedicamentos" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="alergiaamedicamentos" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>


                                      <div class="form-group col-sm-12 col-md-4">
                                          <label for="celular">En caso de alguna enfermedad mencionar y tratamiento de la misma</label>
                                          
                                          <textarea id="otros" name="otros" rows="4" cols="50">En caso de alguna enfermedad mencionar y tratamiento de la misma
                                          </textarea>
                                          </div>


                            </div>
                          </div>                         
                        </div>


                        {{-- </div> --}}
        <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Hábitos psicobiológicos </h3>
                              </div>
                              <!-- /.card-header -->
                              
                                <div class="card-body">
                                  <div class="row">
                                      
                                        
                                       <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Tabáquicos</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tabaquicos"value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tabaquicos" value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>
                                {{-- </div>
                                </div> --}}
   <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Alcoholicos</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="alcoholicos" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="alcoholicos"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

                                <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Cafeinicos</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cafeinicos" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cafeinicos"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                                       <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cafeinicos" value="ocacional" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div>
                          
                                    </div>
                                  </div>


                                <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Drogas</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="drogas" value="si"> 
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="drogas" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      {{-- </div>
                                       <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div> --}}
                          
                                    </div>
                                  </div>
                                  </div>

                                  
                                <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Hooka</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hooka" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hooka" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                                       {{-- <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div> --}}
                          
                                    </div>
                                  </div>
                          </div>








                                 
                           
                        </div>
                    </div>
                    {{-- </div> --}}

                    <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Examen Funcional </h3>
                              </div>
                              <!-- /.card-header -->
                              
                                <div class="card-body">
                                  <div class="row">
                                      
                                        
                                       <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Estado de ánimo</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estadodeanimo"  value="bueno"checked>
                                        <label class="form-check-label">Bueno</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estadodeanimo"  value="decaido">
                                        <label class="form-check-label">Decaido</label>
                                      </div>
                          
                                    </div>
                                  </div>
                                {{-- </div>
                                </div> --}}
   <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Dolor Toráxico</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dolortoraxico" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dolortoraxico"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                          
                                    </div>
                                  </div>

                                <!-- radio -->
                                    {{-- <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Cafeinicos</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                                       <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div>
                          
                                    </div>
                                  </div> --}}


                                <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Tos</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tos" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tos" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      {{-- </div>
                                       <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div> --}}
                          
                                    </div>
                                  </div>
                                  </div>

                                  
                                <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Disnea</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="disnea" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="disnea" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                                       {{-- <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div> --}}
                          
                                    </div>
                                  </div>

                                   <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Ortopnea</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ortopnea" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ortopnea"  value="no"checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                                       {{-- <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div> --}}
                          
                                    </div>
                                  </div>

 <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">DPN</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dpn" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dpn" value="no"checked>
                                        <label class="form-check-label" >No</label>
                                      </div>
                                       {{-- <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div> --}}
                          
                                    </div>
                                  </div>

 <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Edema de Ms Is</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="edemademsis" value="si">
                                        <label class="form-check-label">Si</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="edemademsis" value="no" checked>
                                        <label class="form-check-label">No</label>
                                      </div>
                                       {{-- <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div> --}}
                          
                                    </div>
                                  </div>


 <!-- radio -->
                                    <div class="form-group p-2">
                                    <div class="card">
                                    <label for="cedula">Capacidad Funcional</label>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="capacidadfuncional" value="buena">
                                        <label class="form-check-label">METs>=4(Buena)</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="capacidadfuncional" value="pobre" checked>
                                        <label class="form-check-label">METs<=4(pobre)</label>
                                      </div>
                                       {{-- <div class="form-check">
                                        <input class="form-check-input" type="radio" name="evc" checked>
                                        <label class="form-check-label">Ocacional</label>
                                      </div> --}}
                          
                                    </div>
                                  </div>









                        </div>





                                 
                           
                        </div>
                    
                    {{-- </div> --}}
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

                <a class="btn btn-danger" href="http://www.wreyesenlinea.com/superwi/public/admin/user">cancelar</a>
                
                <input type="submit" value="Guardar" class="btn btn-primary float-right">
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop