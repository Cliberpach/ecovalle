@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Registro Origen Nuevo</h1>
            <form method="POST" action="{{route('origen.store')}}">
               @csrf
               <div class="form-group">
                 <label for="">Origen</label>
                 <input type="text" class="form-control @error('origen') is-invalid @enderror" id="origen" name="origen">
                 @error('origen')
                 
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelarorigen')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection