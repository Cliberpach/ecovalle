@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Registro Linea </h1>
            <form method="POST" action="{{route('linea.store')}}">
               @csrf
               <div class="form-group">
                 <label for="">Linea</label>
                 <input type="text" class="form-control @error('linea') is-invalid @enderror" id="linea" name="linea">
                 @error('linea')
                 
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelarlinea')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection
