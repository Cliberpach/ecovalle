@extends('layout.plantilla')

@section('contenido')
   <div class="container">
        <h1>Eliminar Categoria ? Codigo:{{ $categoria->id}} - Categoria:{{$categoria->categoria}}</h1>
        <form method="POST" action="{{route('categoria.destroy',$categoria->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SI</button>
            <a href="{{ route('cancelarcategoria')}}" class="btn btn-danger"><i class="fas fa-ban"></i>NO</button></a>
               
        </form>
    </div>
@endsection
