@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Editar Empleado</h1>
            <form method="POST"  action="{{ route('empleado.update',$empleado->id)}}">
             {{csrf_field() }} {{method_field('PUT')}}
               <div class="form-group">
                 <label for="">id Empleado</label>
                 <input type="text" class="form-control" id="id" name="id" value="{{$empleado->id}}" disabled>
               </div>

               <div class="form-group">
                <label for="">Dni</label>
                 <input type="text" class="form-control @error('dni') is-invalid @enderror" id="dni" name="dni" value="{{$empleado->dni}}">>
                 <label for="">Empleado</label>
                 <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{$empleado->nombre}}">
                 <label for="">Direccion</label>
                 <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{$empleado->direccion}}">
                 <label for="">Movil</label>
                 <input type="text" class="form-control @error('movil') is-invalid @enderror" id="movil" name="movil" value="{{$empleado->movil}}">
                 <label for="">Area</label>
                 <input type="text" class="form-control @error('area') is-invalid @enderror" id="area" name="area" value="{{$empleado->area}}">
                 <label for="">Sueldo</label>
                 <input type="text" class="form-control @error('sueldo') is-invalid @enderror" id="sueldo" name="sueldo" value="{{$empleado->sueldo}}">
                @error('empelado')
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelarempleado')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection
