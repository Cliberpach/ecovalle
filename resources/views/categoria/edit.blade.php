@extends('layout.plantilla')

@section('contenido')
   <div class="container">

      <div class="card">
          <div class="car body">
            <h1>Editar Categoria</h1>
            <form method="POST"  action="{{ route('categoria.update',$categoria->id)}}">
             {{csrf_field() }} {{method_field('PUT')}}
               <div class="form-group">
                 <label for="">idcategoria</label>
                 <input type="text" class="form-control" id="id" name="id" value="{{$categoria->id}}" disabled>
               </div>

               <div class="form-group">
                 <label for="">Categoria</label>
                 <input type="text" class="form-control @error('categoria') is-invalid @enderror" id="categoria" name="categoria" value="{{$categoria->categoria}}">
                 @error('categoria')
                 <span class="Invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                 </span>
                 @enderror
               </div>
                       
               <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
               <a href="{{ route('cancelarcategoria')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</button></a>
               
            </form>
            </div>
      </div>  

   </div>
@endsection
