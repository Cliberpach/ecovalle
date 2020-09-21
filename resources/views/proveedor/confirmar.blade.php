@extends('layout.plantilla')

@section('contenido')
   <div class="container">
        <h1>Eliminar Proveedor ? Codigo:{{ $proveedor->id}} - RazSoc:{{$proveedor->nombre}}</h1>
        <form method="POST" action="{{route('proveedor.destroy',$proveedor->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SI</button>
            <a href="{{ route('cancelarproveedor')}}" class="btn btn-danger"><i class="fas fa-ban"></i>NO</button></a>
               
        </form>
    </div>
@endsection
