@extends ('layout/admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
      <h3>Resumen de movimientos</h3>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
    </div>
  </div>

  <!--  -->
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <th>Id</th>
            <th>Modelo</th>
            <th>Descripción</th>
            <th>Cantidad</th>            
            <th>Unidad</th>
            <th>Moneda</th>
            <th>Precio unitario</th>
            <th>Precio venta</th>
            <th>Total</th>
            <th>Fecha</th>
          </thead>

          @foreach ($cotizaciones as $cot)
          <tr>
            <td>{{ $cot->id }}</td>
            <td>{{ $cot->modelo }}</td>
            <td>{{ $cot->descripcion }}</td>
            <td>{{ $cot->cantidad }}</td>
            <th>{{ $cot->unidad }}</th>
            <th>{{ $cot->moneda }}</th>
            <th>{{ $cot->precio_unitario }}</th>
            <th>{{ $cot->precio_venta }}</th>
            <th>{{ $cot->total }}</th>
            <th>{{ $cot->created_at }}</th>
          </tr>
          @endforeach
          
        </table>
      </div>
    
    </div>
  </div>



      
@endsection
