@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Editar Almacen</h1>
            <form method="POST"  action="{{ route('almacen.update',$almacen->id)}}">
             {{csrf_field() }} {{method_field('PUT')}}
               <div class="form-group">
                 <label for="">idalmacen</label>
                 <input type="text" class="form-control" id="id" name="id" value="{{$almacen->id}}" disabled>
               </div>

               <div class="form-group">
                 <label for="">Almacen</label>
                 <input type="text" class="form-control @error('almacen') is-invalid @enderror" id="almacen" name="almacen" value="{{$almacen->almacen}}">
                 <label for="">Ubicacion</label>
                 <input type="text" class="form-control @error('ubicacion') is-invalid @enderror" id="ubicacion" name="ubicacion" value="{{$almacen->ubicacion}}">
                 
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
