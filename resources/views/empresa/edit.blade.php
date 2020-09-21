@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Editar Empresa</h1>
            <form method="POST"  action="{{ route('empresa.update',$empresa->id)}}">
             {{csrf_field() }} {{method_field('PUT')}}
               <div class="form-group">
                 <label for="">id Empresa</label>
                 <input type="text" class="form-control" id="id" name="id" value="{{$empresa->id}}" disabled>
               </div>

               <div class="form-group">
                <label for="">Ruc</label>
                 <input type="text" class="form-control @error('ruc') is-invalid @enderror" id="ruc" name="ruc" value="{{$empresa->ruc}}">>
                 <label for="">Empresa</label>
                 <input type="text" class="form-control @error('empresa') is-invalid @enderror" id="empresa" name="empresa" value="{{$empresa->empresa}}">
                 <label for="">Direccion</label>
                 <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{$empresa->direccion}}">
                 <label for="">Fono</label>
                 <input type="text" class="form-control @error('fono') is-invalid @enderror" id="fono" name="fono" value="{{$empresa->fono}}">
                 <label for="">Logo</label>
                 <input type="text" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" value="{{$empresa->logo}}">
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
