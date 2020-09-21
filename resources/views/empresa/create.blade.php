@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Empresa Nueva</h1>
            <form method="POST" action="{{route('empresa.store')}}">
               @csrf
               <div class="form-group">
                 <label for="">Ruc</label>
                 <input type="text" class="form-control @error('ruc') is-invalid @enderror" id="ruc" name="ruc">
                 <label for="">Empresa</label>
                 <input type="text" class="form-control @error('empresa') is-invalid @enderror" id="empresa" name="empresa">
                 <label for="">Direccion</label>
                 <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion">
                 <label for="">Fono</label>
                 <input type="text" class="form-control @error('fono') is-invalid @enderror" id="fono" name="fono">
                 <label for="">Observa</label>
                 <input type="text" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo">
                
                 @error('empresa')
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelarempresa')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection
