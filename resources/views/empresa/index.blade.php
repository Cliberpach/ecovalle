@extends('layout.plantilla')

@section('contenido')
  <div class="container">
      <h1>Listado de Empresas en Ecovalle</h1>
  <a href="{{route('empresa.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
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
                  <th scope="col">Ruc</th>
                  <th scope="col">Empresa</th>
                  <th scope="col">Dirección</th>
                  <th scope="col">Fono</th>
                  <th scope="col">Observ</th>
                  <th scope="col">Opciones</th>
                
                </tr>
              </thead>
              <tbody>
                      @foreach($empresa as $itemempresa)
                        <tr>
                            <td>{{$itemempresa->id}}</td>
                            <td>{{$itemempresa->ruc}}</td>
                            <td>{{$itemempresa->empresa}}</td>
                            <td>{{$itemempresa->direccion}}</td>
                            <td>{{$itemempresa->fono}}</td>
                            <td>{{$itemempresa->logo}}</td>
                            <td>
                             
                             <a href="{{ route('empresa.edit',$itemempresa->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                             <a href="{{ route('empresa.confirmar',$itemempresa->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i>Eliminar</a>
                            </td>
                            
                        </tr>
                      @endforeach
                  
              </tbody>
            </table>
            {{ $empresa->links()}}
      
      </div>
@endsection
