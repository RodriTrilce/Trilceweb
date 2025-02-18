@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Landing: Sorteo</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {!!Session::get('success') !!}</h3>
  </div>
  @endif
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.1/bootstrap-table.min.css">


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
    data-show-footer="true"
    data-toggle="true"

    data-sort-name="fecha_creacion"
    data-sort-order="desc"

    data-height="760"

   data-show-refresh="true"
   data-show-columns="true"

    data-show-pagination-switch="true"
    data-page-list="[10, 25, 50, 100, 200, All]"
    data-export-options='{
      "fileName": "sorteo_export_{{date("Y-m-d")}}",
      "ignoreColumn": ["state"]
    }'
    >
  <thead>
    <tr>
      <th data-field="state" data-checkbox="true"></th>
      <th data-field="nro" data-sortable="true">#</th>
      <th data-field="fecha_creacion" data-sortable="true">Fecha creacíón</th>
      <th data-field="nombre" data-sortable="true">Nombre</th>
      <th data-field="tipo" data-sortable="true">Tipo</th>
      <th data-field="dni">DNI</th>
      <th data-field="nacimiento" data-sortable="true">Fecha Nacimiento</th>
      <th data-field="telefono" data-sortable="true">Teléfono</th>
      <th data-field="email" data-sortable="true">Email</th>
      <th data-field="interes" data-sortable="true">Univerisdad interés</th>
    </tr>
  </thead>

  <tbody>
    @foreach($sorteos as $sorteo)
    <tr>
      <td></td>
      <td>{{$loop->index}}</td>
      <td>{{$sorteo->fecha_registro}}</td>
      <td>{{$sorteo->nombre}}</td>
      <td>{{$sorteo->tipo}}</td>
      <td>{{$sorteo->dni}}</td>
      <td>{{$sorteo->nacimiento}}</td>
      <td>{{$sorteo->telefono}}</td>
      <td>{{$sorteo->email}}</td>
      <td>{{$sorteo->interes}}</td>
     </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
  var page = 'forms_sorteo'
  @parent
@endsection