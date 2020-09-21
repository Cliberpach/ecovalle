@extends('layout.plantilla')

@section('contenido')
  <div class="container">
      <h1>Listado de Metodo de Pago de Eco Valle</h1>
  <a href="{{route('metodopago.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
      <form class="form-inline my-2 my-lg-0 float-right">
        <input name=buscarpor class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value"{{$buscarpor}}">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          @if (session('datos'))
            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                {{ session('datos')}}
              <button type="button" class ="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>  
            </button>
          </div>
         @endif
          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Metodo</th>
                  <th scope="col">Banco</th>
                  <th scope="col">Cuenta</th>
                  <th scope="col">Opciones</th>
                
                </tr>
              </thead>
              <tbody>
                      @foreach($metodopago as $itemmetodopago)
                        <tr>
                            <td>{{$itemmetodopago->id}}</td>
                            <td>{{$itemmetodopago->nombre}}</td>
                            <td>{{$itemmetodopago->banco}}</td>
                            <td>{{$itemmetodopago->cuenta}}</td>
                                               
                           <td>
                             
                             <a href="{{ route('metodopago.edit',$itemmetodopago->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                             <a href="{{ route('metodopago.confirmar',$itemmetodopago->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i>Eliminar</a>
                            </td>
                            
                        </tr>
                      @endforeach
                  
              </tbody>
            </table>
            {{ $metodopago->links()}}
      
      </div>
@endsection
