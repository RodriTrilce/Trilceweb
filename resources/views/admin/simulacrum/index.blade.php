@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Simulacros: {{$university->short_name}}</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
  @endif

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

    data-sort-name="created_at"
    data-sort-order="desc"

    data-height="760"

   data-show-refresh="true"
   data-show-columns="true"

    data-show-pagination-switch="true"
    data-page-list="[20, 50, 100, 200, 300, All]"
    data-export-options='{
      "fileName": "lista_shortlinks_{{date("Y-m-d")}}",
      "ignoreColumn": ["state", "op"]
    }'
    >
  <thead>
    <tr>
      <th data-field="created_at" data-sortable="true">Fecha</th>

      <th data-field="name" data-sortable="true">Nombre</th>
      <th data-field="url" data-sortable="true">URL</th>

      <th data-field="updated_at" data-sortable="true">Fecha actualización</th>
      <th data-field="op" >Operaciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($simulacros as $simulacro)
      <tr>
        <td>{{$simulacro->created_at}}</td>

        <td>{{$simulacro->name}}</td>
        <td><a href="{{$simulacro->url}}" target="_blank">{{$simulacro->url}}</a></td>
        <td>{{$simulacro->updated_at}}</td>
        <td>

          <form action="{{action('Admin\SimulacrumResource@destroy', $simulacro->id)}}" method="post" onsubmit="return secureDelete(this);">
          {{csrf_field()}}
          <input name="_method" type="hidden" value="DELETE">
          <input type="hidden" name="id_university" value="{{$university->id}}">
            <button class="btn btn-secondary btn-undefined" title="Eliminar" type="submit">
              <i class="fa fa-trash"></i>
            </button>
          </form>

          <br>

          <a href="{{action('Admin\SimulacrumResource@edit', $simulacro->id)}}" class="btn btn-secondary btn-undefined" alt="Editar" role="button">
            <i class="fa fa-edit"></i>
          </a>
        </td>
      </tr>
    @endforeach
  </tbody>

</table>

@endsection

@section('scripts')
  var page = 'simulacrum'
  @parent
@endsection
