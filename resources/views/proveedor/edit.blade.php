@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Editar Proveedor</h1>
            <form method="POST"  action="{{ route('proveedor.update',$proveedor->id)}}">
             {{csrf_field() }} {{method_field('PUT')}}
               <div class="form-group">
                 <label for="">idProveedor</label>
                 <input type="text" class="form-control" id="id" name="id" value="{{$proveedor->id}}" disabled>
               </div>

               <div class="form-group">
                <label for="">Ruc</label>
                 <input type="text" class="form-control @error('ruc') is-invalid @enderror" id="ruc" name="ruc" value="{{$proveedor->ruc}}">
                 <label for="">Proveedor</label>
                 <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{$proveedor->nombre}}">
                 <label for="">Direccion</label>
                 <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{$proveedor->direccion}}">
                 <label for="">Fono/Fijo</label>
                 <input type="text" class="form-control @error('fonofijo') is-invalid @enderror" id="fonofijo" name="fonofijo" value="{{$proveedor->fonofijo}}">
                 <label for="">Movil</label>
                 <input type="text" class="form-control @error('fonomovil') is-invalid @enderror" id="fonomovil" name="fonomovil" value="{{$proveedor->fonomovil}}">
                 <label for="">Contacto</label>
                 <input type="text" class="form-control @error('contacto') is-invalid @enderror" id="contacto" name="contacto" value="{{$proveedor->contacto}}">
                 <label for="">Fono/Contacto</label>
                 <input type="text" class="form-control @error('fonocontacto') is-invalid @enderror" id="fonocontacto" name="fonocontacto" value="{{$proveedor->fonocontacto}}">
                 <label for="">Emp Transporte</label>
                 <input type="text" class="form-control @error('emprtras') is-invalid @enderror" id="emprtras" name="emprtras" value="{{$proveedor->emprtras}}">
                 <label for="">Dir Emp Transporte</label>
                 <input type="text" class="form-control @error('direccionemptranps') is-invalid @enderror" id="direccionemptranps" name="direccionemptranps" value="{{$proveedor->direccionemptranps}}">
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
