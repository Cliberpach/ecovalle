@extends('layout.plantilla')

@section('contenido')
   <div class="container">
        <h1>Eliminar Metodo Pago ? Codigo:{{ $metodopago->id}} - Metodo:{{$metodopago->nombre}}</h1>
        <form method="POST" action="{{route('metodopago.destroy',$metodopago->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SI</button>
            <a href="{{ route('cancelarmetodopago')}}" class="btn btn-danger"><i class="fas fa-ban"></i>NO</button></a>
               
        </form>
    </div>
@endsection