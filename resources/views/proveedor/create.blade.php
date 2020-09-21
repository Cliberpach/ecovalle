@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Proveedor Nuevo</h1>
            <form method="POST" action="{{route('proveedor.store')}}">
               @csrf
               <div class="form-group">
                 <label for="">Ruc</label>
                 <input type="text" class="form-control @error('ruc') is-invalid @enderror" id="ruc" name="ruc">
                 <label for="">Proveedor</label>
                 <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre">
                 <label for="">Direccion</label>
                 <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion">
                 <label for="">Fono/Fijo</label>
                 <input type="text" class="form-control @error('fonofijo') is-invalid @enderror" id="fonofijo" name="fonofijo">
                 <label for="">Movil</label>
                 <input type="text" class="form-control @error('fonomovil') is-invalid @enderror" id="fonomovil" name="fonomovil">
                 <label for="">Contacto</label>
                 <input type="text" class="form-control @error('contacto') is-invalid @enderror" id="contacto" name="contacto">
                 <label for="">Fono/Contacto</label>
                 <input type="text" class="form-control @error('fonocontacto') is-invalid @enderror" id="fonocontacto" name="fonocontacto">
                 <label for="">Emp Transporte</label>
                 <input type="text" class="form-control @error('emprtras') is-invalid @enderror" id="emprtras" name="emprtras">
                 <label for="">Dir Emp Transporte</label>
                 <input type="text" class="form-control @error('direccionemptranps') is-invalid @enderror" id="direccionemptranps" name="direccionemptranps">
                 @error('proveedor')
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelarproveedor')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection
