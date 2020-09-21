@extends('layout.plantilla')

@section('contenido')
<div class="car">
  <div class="car bo">
        <div class="container">
            <h1>Listado de Lineas del Sistema</h1>
        <a href="{{route('linea.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
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
                        <th scope="col">Linea</th>
                        <th scope="col">Opciones</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                            @foreach($linea as $itemlinea)
                              <tr>
                                  <td>{{$itemlinea->id}}</td>
                                  <td>{{$itemlinea->linea}}</td>
                                  <td>
                                    <a href="{{ route('linea.edit',$itemlinea->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                    <a href="{{ route('linea.confirmar',$itemlinea->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i>Eliminar</a>
                                  </td>
                                  
                              </tr>
                            @endforeach
                        
                    </tbody>
                  </table>
                  {{ $linea->links()}}
            
            </div>
      @endsection
    </div>
  </div>
