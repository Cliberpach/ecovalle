@extends('layout.plantilla')

@section('contenido')
   <div class="container">
        <h1>Eliminar Empresa ? Codigo:{{ $empresa->id}} - RazSoc:{{$empresa->empresa}}</h1>
        <form method="POST" action="{{route('empresa.destroy',$empresa->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SI</button>
            <a href="{{ route('cancelarempresa')}}" class="btn btn-danger"><i class="fas fa-ban"></i>NO</button></a>
               
        </form>
    </div>
@endsection
