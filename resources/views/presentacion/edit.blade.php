@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Editar Presentacion</h1>
            <form method="POST"  action="{{ route('presentacion.update',$presentacion->id)}}">
             {{csrf_field() }} {{method_field('PUT')}}
               <div class="form-group">
                 <label for="">idcategoria</label>
                 <input type="text" class="form-control" id="id" name="id" value="{{$presentacion->id}}" disabled>
               </div>

               <div class="form-group">
                 <label for="">presentacion</label>
                 <input type="text" class="form-control @error('presentacion') is-invalid @enderror" id="presentacion" name="presentacion" value="{{$presentacion->presentacion}}">
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
