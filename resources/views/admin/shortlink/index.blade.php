@extends('admin.layouts.template')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Short Links</h1>
    </div>
    <div>
      <input id="search-input" class="form-control mb-3" type="text" placeholder="Buscar...">

    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <!--
      <div id="toolbar" class="mb-3">
        <select class="form-control">
          <option value="">Exportación básica</option>
          <option value="all">Exportar todos</option>
          <option value="selected">Exportar selección</option>
        </select>
      </div>
      -->

      <table id="my-table" class="table table-striped table-hover"
      data-search="false"
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
          "fileName": "lista_shortlinks_{{ date('Y-m-d') }}",
          "ignoreColumn": ["state", "op"]
      }'>
  
  

        <thead class="thead-dark">
            <tr>
                <th data-field="created_at" data-sortable="true">Fecha creación</th>
                <th data-field="slug" data-sortable="true">Slug</th>
                <th data-field="url" data-sortable="true">URL</th>
                <th data-field="updated_at" data-sortable="true">Fecha actualización</th>
                <th data-field="op">Operaciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($links->sortByDesc('created_at') as $link)
                <tr>
                    <td>{{ $link->created_at }}</td>
                    <td>
                        <input type="text" class="form-control" onclick="this.focus();this.select()" readonly
                            value="https://www.trilce.edu.pe/l/{{ $link->slug }}">
                        <a href="https://www.trilce.edu.pe/l/{{ $link->slug }}" target="_blank">/l/{{ $link->slug }}</a>
                    </td>
                    <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
                    <td>{{ $link->updated_at }}</td>
                    <td>
                        <form action="{{ action('Admin\ShortlinkController@destroy', $link->id) }}" method="post"
                            onsubmit="return secureDelete(this);" class="d-inline">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-sm btn-danger" title="Eliminar" type="submit">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <a href="{{ action('Admin\ShortlinkController@edit', $link->id) }}" class="btn btn-sm btn-primary"
                            title="Editar">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection

@section('scripts')
    <script>
        var page = 'shortlink';
    </script>
    @parent
@endsection
