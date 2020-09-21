@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Registro Presentacion  Nuevo</h1>
            <form method="POST" action="{{route('presentacion.store')}}">
               @csrf
               <div class="form-group">
                 <label for="">Presentacion</label>
                 <input type="text" class="form-control @error('presentacion') is-invalid @enderror" id="presentacion" name="presentacion">
                 @error('presentacion')
                 
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelarpresentacion')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection
