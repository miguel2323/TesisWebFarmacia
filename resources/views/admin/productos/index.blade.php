@extends('adminlte::page')

@section('title','FarmaUDO')

    
@section('content_header')

    <a  class="btn btn-secondary btn-sm  float-right" href="{{route('admin.productos.create')}}">Crear Nuevo Producto</a>

  <h1>Lista de Productos </h1>
@stop

@section('content')



@if (session('info'))
 <div class="alert alert-success">
 <strong>{{session('info')}}</strong>
 </div>
     
 @endif

     @livewire('admin.productos-index')
@stop 

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
     <script>console.log('Hi!');</script>
@stop 