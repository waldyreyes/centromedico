@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Paciente</h1>
@stop

@section('content')
     <div class="card-body">
                <div class="container">
                        <div id="app">
                          

                                  <!-- general form elements -->
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Datos Generales</h3>
                              </div>
                              <!-- /.card-header -->
                              
                                <div class="card-body">
                                  <div class="row">
                                      
                                          <input type="text" class="form-control" id="codigo" placeholder="Código" name="codigo" value="codigo" hidden>
                                        
                                    
                                        <input type="text" class="form-control" id="codigo_referido" name="codigo_referido" value="5931" readonly hidden>
                                      
                                      
                                      <div class="form-group col-sm-12 col-md-4">
                                          <label for="cedula">Nombre</label>
                                          <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="">
                                      </div>
                                      <div class="form-group col-sm-12 col-md-4">
                                          <label for="cedula">Apellidos</label>
                                          <input type="text" class="form-control" id="apellido" placeholder="Apellidos" name="apellido" value="">
                                      </div>
                                      <!--<div class="form-group col-sm-12 col-md-4">-->
                                      <!--    <label for="cedula">Cédula</label>-->
                                      <!--    <input type="text" class="form-control" id="cedula" placeholder="Cédula" name="cedula" value="">-->
                                      <!--</div>-->
                                      <!--<div class="form-group col-sm-12 col-md-4">-->
                                      <!--    <label for="fecha_nacimiento">Fecha de nacimiento</label>-->
                                          <input type="text" class="form-control" id="fecha_nacimiento" placeholder="Fecha de nacimiento" name="fecha_nacimiento" hidden>
                                      <!--</div>-->
                                      <div class="form-group col-sm-12 col-md-4">
                                          <label for="direccion">Dirección</label>
                                          <input type="text" class="form-control" id="direccion" placeholder="Dirección" name="direccion" value="">
                                      </div>
                                      <div class="form-group col-sm-12 col-md-4">
                                          <label for="telefono">Telefono</label>
                                          <input type="text" class="form-control"   id="telefono" placeholder="Número de Telefono" name="telefono" value="">
                                      </div>
                                      <div class="form-group col-sm-12 col-md-4">
                                          <label for="celular">Celular</label>
                                          <input type="text" class="form-control" id="celular" placeholder="Número de celular" name="celular" value="">
                                      </div>
                                      

                                  <div class="form-group col-sm-12 col-md-4">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="">
                                  </div>

                                  
                                  
                                  <!--<div class="form-group col-sm-12 col-md-4">-->
                                  <!--    <label for="password_confirm">Confirmar Contraseña</label>-->
                                  <!--    <input type="password" class="form-control" id="password_confirm" placeholder="Confirmar Contraseña" name="password_confirm">-->
                                  <!--  </div>-->

                                  <!--  <div class="form-group col-sm-12 col-md-4">-->
                                  <!--    <label for="posicion">Posición en el diagrama </label>-->
                                  <!--    <select class="form-control" name="posicion">-->
                                  <!--      <option value="derecha">Derecha</option>-->
                                  <!--      <option value="izquierda">Izquierda</option>-->
                                  <!--    </select>-->
                                  <!--</div>-->
                              
                            </div>
                          </div>
                                
                            
                
                           
                        </div>
                    </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

                <a class="btn btn-danger" href="http://www.wreyesenlinea.com/superwi/public/admin/user">cancelar</a>
                
                <input type="submit" value="Guardar" class="btn btn-primary float-right">
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop