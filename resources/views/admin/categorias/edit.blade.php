@extends('adminlte::page')

@section('title','FarmaUDO')

    
@section('content_header')
    <h1>Editar Categorias</h1>
@stop

@section('content')
  {{-- mostar alerta de ediccion --}}
   @if (session('info'))
   <div class="alert alert-success">
   <strong>{{session('info')}}</strong>
   </div>
       
   @endif
<div class="cadrd">
    <div class="card-body">
        {!! Form::model($categoria,['route'=>['admin.categorias.update',$categoria],'method'=>'put'])!!}
              <div class="form-group">
                 {!! Form::label('name','Nombre')!!}
                 {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la categoria']) !!}
                 </div> 

                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror


                 <div class="form-group">
                     {!! Form::label('slug','Slug')!!}
                     {!! Form::text('slug',null, ['class'=>'form-control','placeholder'=>'Ingrese el slug de la categoria','readonly']) !!}
                     </div> 

                       
                    @error('slug')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    {!! Form::submit('Actualizar categoria', ['class'=>'btn btn-primary']) !!}


         {!! Form::close([])!!}

    </div>
</div>

 

@stop 

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>  

<script>

        $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
        });

</script>
@endsection
