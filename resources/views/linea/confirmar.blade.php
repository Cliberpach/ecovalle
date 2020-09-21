@extends('layout.plantilla')

@section('contenido')
   <div class="container">
        <h1>Eliminar Linea ? Codigo:{{ $linea->id}} - Linea:{{$linea->linea}}</h1>
        <form method="POST" action="{{route('linea.destroy',$linea->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SI</button>
            <a href="{{ route('cancelarlinea')}}" class="btn btn-danger"><i class="fas fa-ban"></i>NO</button></a>
               
        </form>
    </div>
@endsection