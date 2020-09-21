@extends('layout.plantilla')

@section('contenido')
   <div class="container">
        <h1>Eliminar Presentacion ? Codigo:{{ $presentacion->id}} - presentacion:{{$presentacion->presentacion}}</h1>
        <form method="POST" action="{{route('presentacion.destroy',$presentacion->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SI</button>
            <a href="{{ route('cancelarpresentacion')}}" class="btn btn-danger"><i class="fas fa-ban"></i>NO</button></a>
               
        </form>
    </div>
@endsection
