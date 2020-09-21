@extends('layout.plantilla')

@section('contenido')
<div class="car">
  <div class="car bo">
        <div class="container">
            <h1>Listado de Almacen</h1>
        <a href="{{route('almacen.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
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
                        <th scope="col">Codigo</th>
                        <th scope="col">Almacen</th>
                        <th scope="col">ubicacion</th>
                        <th scope="col">Opciones</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                            @foreach($almacen as $itemalmacen)
                              <tr>
                                  <td>{{$itemalmacen->id}}</td>
                                  <td>{{$itemalmacen->almacen}}</td>
                                  <td>{{$itemalmacen->ubicacion}}</td>
                                  <td>
                                    <a href="{{ route('almacen.edit',$itemalmacen->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                    <a href="{{ route('almacen.confirmar',$itemalmacen->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i>Eliminar</a>
                                  </td>
                                  
                              </tr>
                            @endforeach
                        
                    </tbody>
                  </table>
                  {{ $almacen->links()}}
            
            </div>
      @endsection
    </div>
  </div>