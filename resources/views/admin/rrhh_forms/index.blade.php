@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Recursos humanos: Formularios</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
  @endif

<!--<button class="btn btn-primary" id="exportar_pdf">Exportar a PDF</button> -->
<!--<input type="submit" id="export_excel" class="btn btn-primary" value="Exportar a Excel">-->

<div id="toolbar">
  <select class="form-control">
    <option value="">Exportacion basica</option>
    <option value="all">Exportar todos</option>
    <option value="selected">Exportar selección</option>
  </select>
</div>

<table
    id="my-table" 

    data-show-export="true"
    data-pagination="true"
    data-click-to-select="true"
    data-maintain-selected="true"
    data-toolbar="#toolbar"
    data-show-toggle="true"

    data-toggle="table"
    data-sort-name="date"
    data-sort-order="desc"
    data-height="760"
    data-show-pagination-switch="true"
    data-page-list="[10, 25, 50, 100, 200, All]"
    data-export-options='{
      "fileName": "{{$type}}_{{date("Y-m-d")}}",
      "ignoreColumn": ["state"]
    }'
    >
  <thead>
    <tr>
      <th data-field="state" data-checkbox="true"></th>
      <th data-field="nro" data-sortable="true">#</th>
      <th data-field="register" data-sortable="true">Fecha de registro</th>
      <th data-field="dni" data-sortable="true">DNI</th>
      <th data-field="nombre" data-sortable="true">Nombre</th>
      <th data-field="email" data-sortable="true">Email</th>
      <th data-field="telefono" data-sortable="true">Telefono</th>
      <th data-field="carrera" data-sortable="true">Carrera</th>
      <th data-field="centro_estudios" data-sortable="true">Centro de Estudios</th>
      <th data-field="distrito" data-sortable="true">Distrito</th>
      <th data-field="expectativa_salarial" data-sortable="true">Expectativa salarial</th>
      <th data-field="experiencia" data-sortable="true">Experiencia</th>
      <th data-field="experiencia_detalle" >Experiencia detalle</th>
      <th data-field="porque_trilce" >Porque Trilce</th>
      <th data-field="porque_tutora" >Porque el puesto</th>
    </tr>
  </thead>

  <tbody>
    @foreach($data as $fila)
    <tr>
      <td></td>
      <td>{{$loop->index}}</td>
      <td>{{$fila->register}}</td>
      <td>{{$fila->dni}}</td>
      <td>{{$fila->nombre}}</td>
      <td>{{$fila->email}}</td>
      <td>{{$fila->telefono}}</td>
      <td>{{$fila->carrera}}</td>
      <td>{{$fila->centro_estudios}}</td>
      <td>{{$fila->distrito}}</td>
      <td>{{$fila->expectativa_salarial}}</td>
      <td>{{$fila->experiencia}}</td>
      <td>{{$fila->experiencia_detalle}}</td>
      <td>{{$fila->porque_trilce}}</td>
      <td>{{$fila->porque_tutora}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
  var page = 'rrhh_forms'
  @parent
@endsection
