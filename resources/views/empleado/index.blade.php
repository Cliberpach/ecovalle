@extends('layout.plantilla')

@section('contenido')
  <div class="container">
      <h1>Listado de Empleados de Eco Valle</h1>
  <a href="{{route('empleado.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
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
                  <th scope="col">Dni</th>
                  <th scope="col">Empleado</th>
                  <th scope="col">Dirección</th>
                  <th scope="col">Movil</th>
                  <th scope="col">Area</th>
                  <th scope="col">Sueldo</th>
                  <th scope="col">Opciones</th>
                
                </tr>
              </thead>
              <tbody>
                      @foreach($empleado as $itemempleado)
                        <tr>
                            <td>{{$itemempleado->id}}</td>
                            <td>{{$itemempleado->dni}}</td>
                            <td>{{$itemempleado->nombre}}</td>
                            <td>{{$itemempleado->direccion}}</td>
                            <td>{{$itemempleado->movil}}</td>
                            <td>{{$itemempleado->area}}</td>
                            <td>{{$itemempleado->sueldo}}</td>
                     
                           <td>
                             
                             <a href="{{ route('empleado.edit',$itemempleado->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                             <a href="{{ route('empleado.confirmar',$itemempleado->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i>Eliminar</a>
                            </td>
                            
                        </tr>
                      @endforeach
                  
              </tbody>
            </table>
            {{ $empleado->links()}}
      
      </div>
@endsection
