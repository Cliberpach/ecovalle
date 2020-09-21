@extends('layout.plantilla')

@section('contenido')
   <div class="container">
        <h1>Eliminar Almacen ? Codigo:{{ $almacen->id}} - Alamacen:{{$almacen->almacen}}</h1>
        <form method="POST" action="{{route('almacen.destroy',$almacen->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SI</button>
            <a href="{{ route('cancelaralmacen')}}" class="btn btn-danger"><i class="fas fa-ban"></i>NO</button></a>
               
        </form>
    </div>
@endsection