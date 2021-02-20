@extends('adminlte::page')

@section('title', 'Medical Center')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <p>Medical Center</p>
     {{-- background={{asset('img/fondo.jpg') }}> --}}
     <img  src="{{asset('img/fondo.jpg') }}" width="1300"
     height="801"> 
    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
