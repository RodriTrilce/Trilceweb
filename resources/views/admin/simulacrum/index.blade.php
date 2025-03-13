@extends('admin.layouts.template')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Simulacros: {{$university->short_name}}</h1>
  </div>

  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ Session::get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  <div class="mb-3">
    <select class="form-control w-auto d-inline-block">
      <option value="">Exportación básica</option>
      <option value="all">Exportar todos</option>
      <option value="selected">Exportar selección</option>
    </select>
  </div>

  <div class="table-responsive">
    <table id="my-table" 
      class="table table-striped table-hover"
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
      <thead class="thead-dark">
        <tr>
          <th data-field="created_at" data-sortable="true">Fecha</th>
          <th data-field="name" data-sortable="true">Nombre</th>
          <th data-field="url" data-sortable="true">URL</th>
          <th data-field="op">Acciones</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($simulacros as $simulacro)
          <tr>
            <td>{{ $simulacro->created_at }}</td>
            <td>{{ $simulacro->name }}</td>
            <td>
              @php
                $parsedUrl = parse_url($simulacro->url);
                $host = $parsedUrl['host'] ?? '';
                $path = $parsedUrl['path'] ?? '';
                $shortUrl = $host . (strlen($path) > 15 ? substr($path, 0, 15) . '...' : $path);
              @endphp
              <a href="{{ $simulacro->url }}" target="_blank" class="btn btn-link p-0">
                {{ $shortUrl }}
              </a>
            </td>
            <td>
              <div class="btn-group">
                <a href="{{ action('Admin\SimulacrumResource@edit', $simulacro->id) }}" 
                   class="btn btn-sm btn-warning" title="Editar">
                  <i class="fa fa-edit"></i>
                </a>

                <form action="{{ action('Admin\SimulacrumResource@destroy', $simulacro->id) }}" 
                      method="post" 
                      onsubmit="return secureDelete(this);" 
                      class="d-inline">
                  {{ csrf_field() }}
                  <input name="_method" type="hidden" value="DELETE">
                  <input type="hidden" name="id_university" value="{{ $university->id }}">
                  <button class="btn btn-sm btn-danger" title="Eliminar" type="submit">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection

@section('scripts')
  var page = 'simulacrum';
  @parent
@endsection
