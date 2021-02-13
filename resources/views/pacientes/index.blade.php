@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sección de Pacientes</h1>
@stop

@section('content')
   <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              {{-- <h3 class="card-title">Sección de Pacientes</h3> --}}

              <div class="card-tools">
                  <form action="">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="usuario" class="form-control float-right" placeholder="Buscar por nombre"  value="">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                </form>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 1000px;">

                    <td><a class="m-2 float-right btn btn-success" href="http://www.wreyesenlinea.com/superwi/public/admin/user/create">Crear Nuevo Paciente</a></td>

              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellos</th>
                    <!--<th>Cédula</th>-->
                    <!--<th>Fecha de nacimiento</th>-->
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Celular</th>
                    
                    <!--<th>Posiciónn</th>-->
                    <th>Estado</th>
                    <th>Slug</th>
                    <th>Fecha Creación</th>
                    <th>Fecha Modificación</th>
                    <th colspan="3"></th>
                  </tr>
                </thead>
                <tbody>
                                            <tr>
                            <td>2</td>
                           
                            <td>Andres</td>
                            <td>Sanchez</td>
                            <!--<td>087-0020189-4</td>-->
                            <!--<td></td>-->
                            <td>Pina vieja</td>
                            <td></td>
                            <td></td>
                            {{-- <td>andres@gmail.com</td> --}}
                            <!--<td></td>-->
                            
                            <td>activo</td>
                            <td>andres-sanchez</td>
                            <td>2020-09-26 23:09:18</td>
                            <td>2020-09-26 23:09:18</td>

                            <td><a class="btn btn-default" href="http://www.wreyesenlinea.com/superwi/public/admin/user/andres-sanchez">Ver</a></td>
                            <td><a class="btn btn-info" href="http://www.wreyesenlinea.com/superwi/public/admin/user/andres-sanchez/edit">Editar</a></td>
                            <td><a class="btn btn-danger" href="http://www.wreyesenlinea.com/superwi/public/admin/user?andres-sanchez">Eliminar</a></td>
                                                        
                        </tr> 
                                            <tr>
                            <td>3</td>
                        
                            <td>Waldy Antonio</td>
                            <td>Reyes Sanchez</td>
                            <!--<td></td>-->
                            <!--<td></td>-->
                            <td>fantino</td>
                            <td></td>
                            <td>8099731923</td>
                            {{-- <td>wrelflow@gmail.com</td> --}}
                            <!--<td></td>-->
                            {{-- <td>admin</td> --}}
                            <td>activo</td>
                            <td>waldy-antonio-reyes-sanchez</td>
                            <td>2020-09-26 23:15:38</td>
                            <td>2020-09-26 23:15:38</td>

                            <td><a class="btn btn-default" href="http://www.wreyesenlinea.com/superwi/public/admin/user/waldy-antonio-reyes-sanchez">Ver</a></td>
                            <td><a class="btn btn-info" href="http://www.wreyesenlinea.com/superwi/public/admin/user/waldy-antonio-reyes-sanchez/edit">Editar</a></td>
                            <td><a class="btn btn-danger" href="http://www.wreyesenlinea.com/superwi/public/admin/user?waldy-antonio-reyes-sanchez">Eliminar</a></td>
                              
                                            <tr>
                            <td>5</td>
                            {{-- <td>894</td>
                            <td>5931</td> --}}
                            <td>Alfredo</td>
                            <td>Reyes</td>
                            <!--<td></td>-->
                            <!--<td></td>-->
                            <td>jima</td>
                            <td>809</td>
                            <td>809</td>
                            <td>alfredoreyes@gmail.com</td>
                            <!--<td></td>-->
                            {{-- <td>admin</td>
                            <td>activo</td> --}}
                            <td>alfredo-reyes</td>
                            <td>2020-11-28 13:33:40</td>
                            <td>2020-11-28 13:33:40</td>

                            <td><a class="btn btn-default" href="http://www.wreyesenlinea.com/superwi/public/admin/user/alfredo-reyes">Ver</a></td>
                            <td><a class="btn btn-info" href="http://www.wreyesenlinea.com/superwi/public/admin/user/alfredo-reyes/edit">Editar</a></td>
                            <td><a class="btn btn-danger" href="http://www.wreyesenlinea.com/superwi/public/admin/user?alfredo-reyes">Eliminar</a></td>
                                                        
                        </tr> 
                                      
                  
                </tbody>
              </table>

              <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Anterior">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://www.wreyesenlinea.com/superwi/public/admin/user?page=2">2</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="http://www.wreyesenlinea.com/superwi/public/admin/user?page=2" rel="next" aria-label="Siguiente &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop