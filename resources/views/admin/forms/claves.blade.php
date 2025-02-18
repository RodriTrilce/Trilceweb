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
      "fileName": "claves_export_{{date("Y-m-d")}}",
      "ignoreColumn": ["state"]
    }'
    >
  <thead>
    <tr>
      <th data-field="state" data-checkbox="true"></th>
      <th data-field="nro" data-sortable="true">#</th>

      <th data-field="fecha_creacion" data-sortable="true">Fecha creacíón</th>
      <th data-field="nombre" data-sortable="true">Nombre</th>
      <th data-field="apellido" data-sortable="true">Apellido</th>
      <th data-field="email" data-sortable="true">Email</th>
      <th data-field="telefono" data-sortable="true">Telefono</th>
      <th data-field="distrito" data-sortable="true">Distrito</th>
      <th data-field="op_whatsapp" data-sortable="true">OP: Whatsapp?</th>
      <th data-field="op_email" data-sortable="true">OP: Email?</th>
    </tr>
  </thead>

  <tbody>
    @foreach($claves as $row)
    <tr>
      <td></td>
      <td>{{$loop->index}}</td>
      <td>{{$row->fecha}}</td>
      <td>{{$row->nombre}}</td>
      <td>{{$row->apellido}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->telefono}}</td>
      <td>{{$row->distrito}}</td>
      <td>{{ ($row->op_whatsapp ? 'op_what '.$row->op_whatsapp :'' ) }}</td>
      <td>{{ ($row->op_email ? 'op_email '.$row->op_email :'' ) }}</td>
     </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
  var page = 'forms_sorteo'
  @parent
@endsection