@extends ('layout/admin')
@section ('contenido')
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
      <!-- Boton que en el href nos lleva a la ruta categoria/create -->
      <h3>Listado de vendedores <a href="vendedores/create"><button class="btn btn-success">Agregar</button></a></h3>
      <!--Se incluye el archivo que vincula el formulario con la eleccion de categorias  -->
      @include('vendedores.search')
    </div>
  </div>

  <!--  -->
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>E-mail</th>
            <th>Área</th>
            <th>Opciones</th>
          </thead>
          <!--Estructura de control que recorre todas las categorias por medio de la variable recibida por el controlador  -->
          @foreach ($vendedores as $ven)
          <tr>
            <td>{{ $ven->id }}</td>
            <td>{{ $ven->nombre }}</td>
            <td>{{ $ven->direccion }}</td>
            <td>{{ $ven->tel }}</td>
            <td>{{ $ven->email }}</td>
            <td>{{ $ven->area }}</td>
            <td>
              <a href="{{URL::action('VendedoresController@edit',$ven->id)}}"><button class="btn btn-info">Editar</button></a>
              <a href="#" data-target="#modal-delete-{{$ven->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
            </td>
          </tr>
          @include('vendedores.modal')
          @endforeach
        </table>
      </div>
      {{$vendedores->render()}}
    </div>
  </div>
@stop
