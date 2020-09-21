@extends('layout.plantilla')

@section('contenido')
<div class="car">
  <div class="car bo">
        <div class="container">
            <h1>Listado de Origen de Documento</h1>
        <a href="{{route('origen.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
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
                        <th scope="col">Origen</th>
                        <th scope="col">Opciones</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                            @foreach($origen as $itemorigen)
                              <tr>
                                  <td>{{$itemorigen->id}}</td>
                                  <td>{{$itemorigen->origen}}</td>
                                  <td>
                                    <a href="{{ route('origen.edit',$itemorigen->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                    <a href="{{ route('origen.confirmar',$itemorigen->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i>Eliminar</a>
                                  </td>
                                  
                              </tr>
                            @endforeach
                        
                    </tbody>
                  </table>
                  {{ $origen->links()}}
            
            </div>
      @endsection
    </div>
  </div>
