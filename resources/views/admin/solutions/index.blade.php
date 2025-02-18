@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Solucionarios: {{$university->short_name}}</h1>
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

      <th data-field="display" data-sortable="true">Año</th>

      @if($university->id == '1')
        <th data-field="exm_1" data-sortable="true">Aptitud Académica y Humanidades</th>
        <th data-field="exm_2" data-sortable="true">Matemática</th>
        <th data-field="exm_3" data-sortable="true">Física y Química</th>
      @endif

      @if($university->id == '2')
        <th data-field="exm_1" data-sortable="true">Área B y D</th>
        <th data-field="exm_2" data-sortable="true">Área E</th>
		<th data-field="exm_3" data-sortable="true">Área A</th>
		<th data-field="exm_4" data-sortable="true">Área C</th>
      @endif

      @if($university->id == '3')
        <th data-field="exm_1" data-sortable="true">Primera Opción</th>
        <th data-field="exm_2" data-sortable="true">Evaluación del Talento - 1</th>
        <th data-field="exm_3" data-sortable="true">Evaluación del Talento - 2</th>
      @endif

      <th data-field="updated_at" data-sortable="true">Fecha actualización</th>
      <th data-field="op" >Operaciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($solutions as $solution)
      <tr>
        <td>{{$solution->created_at}}</td>

        <td>{{$solution->display}}</td>

      @if($university->id == '1')
        <td>@if($solution->exm_1)<a href="{{$solution->exm_1}}" target="_blank">{{$solution->exm_1}}</a> @endif</td>
        <td>@if($solution->exm_2)<a href="{{$solution->exm_2}}" target="_blank">{{$solution->exm_2}}</a> @endif</td>
        <td>@if($solution->exm_3)<a href="{{$solution->exm_3}}" target="_blank">{{$solution->exm_3}}</a> @endif</td>
      @endif

      @if($university->id == '2')
        <td>@if($solution->exm_1)<a href="{{$solution->exm_1}}" target="_blank">{{$solution->exm_1}}</a> @endif</td>
        <td>@if($solution->exm_2)<a href="{{$solution->exm_2}}" target="_blank">{{$solution->exm_2}}</a> @endif</td>
		<td>@if($solution->exm_3)<a href="{{$solution->exm_3}}" target="_blank">{{$solution->exm_3}}</a> @endif</td>
		<td>@if($solution->exm_4)<a href="{{$solution->exm_4}}" target="_blank">{{$solution->exm_4}}</a> @endif</td>
      @endif

      @if($university->id == '3')
        <td>@if($solution->exm_1)<a href="{{$solution->exm_1}}" target="_blank">{{$solution->exm_1}}</a> @endif</td>
        <td>@if($solution->exm_2)<a href="{{$solution->exm_2}}" target="_blank">{{$solution->exm_2}}</a> @endif</td>
        <td>@if($solution->exm_3)<a href="{{$solution->exm_3}}" target="_blank">{{$solution->exm_3}}</a> @endif</td>
      @endif

        <td>{{$solution->updated_at}}</td>
        <td>

          <form action="{{action('Admin\SolutionResource@destroy', $solution->id)}}" method="post" onsubmit="return secureDelete(this);">
          {{csrf_field()}}
          <input name="_method" type="hidden" value="DELETE">
          <input type="hidden" name="id_university" value="{{$university->id}}">
            <button class="btn btn-secondary btn-undefined" title="Eliminar" type="submit">
              <i class="fa fa-trash"></i>
            </button>
          </form>

          <br>

          <a href="{{action('Admin\SolutionResource@edit', $solution->id)}}" class="btn btn-secondary btn-undefined" alt="Editar" role="button">
            <i class="fa fa-edit"></i>
          </a>

        </td>
      </tr>
    @endforeach
  </tbody>

</table>

@endsection

@section('scripts')
  var page = 'solution'
  @parent
@endsection