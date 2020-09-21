@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Registro Categoria Nuevo</h1>
            <form method="POST" action="{{route('categoria.store')}}">
               @csrf
               <div class="form-group">
                 <label for="">Categoria</label>
                 <input type="text" class="form-control @error('categoria') is-invalid @enderror" id="categoria" name="categoria">
                 @error('categoria')
                 
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelarcategoria')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection
