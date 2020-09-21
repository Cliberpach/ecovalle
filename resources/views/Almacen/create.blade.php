@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Registro Almacen Nuevo</h1>
            <form method="POST" action="{{route('almacen.store')}}">
               @csrf
               <div class="form-group">
                 <label for="">Almacen</label>
                 <input type="text" class="form-control @error('almacen') is-invalid @enderror" id="almacen" name="almacen">
                 <label for="">Ubicacion</label>
                 <input type="text" class="form-control @error('ubicacion') is-invalid @enderror" id="ubicacion" name="ubicacion">
                 
                 @error('almacen')
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelaralmacen')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection
