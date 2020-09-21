@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Editar Metodo Pago</h1>
            <form method="POST"  action="{{ route('metodopago.update',$metodopago->id)}}">
             {{csrf_field() }} {{method_field('PUT')}}
               <div class="form-group">
                 <label for="">id Metodo</label>
                 <input type="text" class="form-control" id="id" name="id" value="{{$metodopago->id}}" disabled>
               </div>

               <div class="form-group">
                <label for="">Metodo</label>
                 <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{$metodopago->nombre}}">
                 <label for="">Banco</label>
                 <input type="text" class="form-control @error('banco') is-invalid @enderror" id="banco" name="banco" value="{{$metodopago->banco}}">
                 <label for="">Cuenta</label>
                 <input type="text" class="form-control @error('cuenta') is-invalid @enderror" id="cuenta" name="cuenta" value="{{$metodopago->cuenta}}">
                 @error('metodopago')
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelarmetodopago')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection