@extends('layout.plantilla')

@section('contenido')
  <div class="container">
      <h1>Listado de Proveedores</h1>
  <a href="{{route('proveedor.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
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
                  <th scope="col">Nombre</th>
                  <th scope="col">Dirección</th>
                  <th scope="col">Fijo</th>
                  <th scope="col">Movil</th>
                  <th scope="col">Contacto</th>
                  <th scope="col">Transporte</th>
                  <th scope="col">Dire_Trans</th>
                  <th scope="col">Opciones</th>
                
                </tr>
              </thead>
              <tbody>
                      @foreach($proveedor as $itemproveedor)
                        <tr>
                            <td>{{$itemproveedor->id}}</td>
                            <td>{{$itemproveedor->ruc}}</td>
                            <td>{{$itemproveedor->nombre}}</td>
                            <td>{{$itemproveedor->direccion}}</td>
                            <td>{{$itemproveedor->fonofijo}}</td>
                            <td>{{$itemproveedor->fonomovil}}</td>
                            <td>{{$itemproveedor->contacto}}</td>
                            <td>{{$itemproveedor->emprtras}}</td>
                            <td>{{$itemproveedor->direccionemptranps}}</td>
                           <td>
                             
                             <a href="{{ route('proveedor.edit',$itemproveedor->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                             <a href="{{ route('proveedor.confirmar',$itemproveedor->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i>Eliminar</a>
                            </td>
                            
                        </tr>
                      @endforeach
                  
              </tbody>
            </table>
            {{ $proveedor->links()}}
      
      </div>
@endsection
