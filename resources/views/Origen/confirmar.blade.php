@extends('layout.plantilla')

@section('contenido')
   <div class="container">
        <h1>Eliminar Origen ? Codigo:{{ $origen->id}} - Origen :{{$origen->origen}}</h1>
        <form method="POST" action="{{route('origen.destroy',$origen->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SI</button>
            <a href="{{ route('cancelarorigen')}}" class="btn btn-danger"><i class="fas fa-ban"></i>NO</button></a>
               
        </form>
    </div>
@endsection