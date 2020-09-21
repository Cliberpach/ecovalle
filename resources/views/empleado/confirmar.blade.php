@extends('layout.plantilla')

@section('contenido')
   <div class="container">
        <h1>Eliminar Empleado ? Codigo:{{ $empleado->id}} - Empleado:{{$empleado->nombre}}</h1>
        <form method="POST" action="{{route('empleado.destroy',$empleado->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SI</button>
            <a href="{{ route('cancelarempleado')}}" class="btn btn-danger"><i class="fas fa-ban"></i>NO</button></a>
               
        </form>
    </div>
@endsection
