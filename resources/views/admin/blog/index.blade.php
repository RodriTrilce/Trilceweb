@extends('admin.layouts.template')

@section('content')
  <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom">
    <h1 class="h2 mb-0">Gestión de Posts del Blog</h1>
  </div>

  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="fa fa-check-circle me-2"></i>
      {{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
  @endif

  <div class="card mb-4">
    <div class="card-body row g-3 align-items-end">
      <div class="col-md-3">
        <label for="filter-site" class="form-label">Filtrar por blog:</label>
        <select id="filter-site" class="form-select">
          <option value="">Todos</option>
          <option value="colegio">Colegio</option>
          <option value="academia">Academia</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="filter-date" class="form-label">Filtrar por fecha:</label>
        <input type="date" id="filter-date" class="form-control">
      </div>

      <div class="col-md-3">
        <label for="search-input" class="form-label">Buscar:</label>
        <input type="text" id="search-input" class="form-control" placeholder="Buscar título o blog...">
      </div>

      <div class="col-md-3 d-flex gap-2">
        <button id="clear-filters" class="btn btn-outline-secondary w-100">Limpiar filtros</button>
      </div>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body d-md-flex justify-content-between align-items-center">
      <h5 class="mb-3 mb-md-0">Opciones de exportación:</h5>
      <select class="form-select w-auto" id="export-options">
        <option value="">Exportación básica</option>
        <option value="all">Exportar todos</option>
        <option value="selected">Exportar selección</option>
      </select>
    </div>
  </div>

  <div class="table-responsive">
    <table
      id="my-table"
      class="table table-bordered table-hover align-middle"
      data-pagination="true"
      data-show-export="true"
      data-click-to-select="true"
      data-toolbar="#toolbar"
      data-show-toggle="true"
      data-show-columns="true"
      data-page-list="[20, 50, 100, 200, 300, All]"
      data-sort-name="created_at"
      data-sort-order="desc"
      data-export-options='{
        "fileName": "lista_blog_{{date("Y-m-d")}}",
        "ignoreColumn": ["state", "op"]
      }'
    >
      <thead class="table-light">
        <tr>
          <th data-field="state" data-checkbox="true"></th>
          <th data-field="created_at" data-sortable="true">Fecha</th>
          <th data-field="site" data-sortable="true">Blog</th>
          <th data-field="title" data-sortable="true">Título</th>
          <th data-field="marker" data-sortable="true" class="text-center">Marcado</th>
          <th data-field="visible" data-sortable="true" class="text-center">Visible</th>
          <th data-field="approved" data-sortable="true" class="text-center">Aprobado</th>
          <th data-field="op" class="text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data->sortByDesc('created_at') as $post)
          <tr>
            <td></td>
            <td data-order="{{ $post->created_at->timestamp }}">{{ $post->created_at->format('Y-m-d') }}</td>
            <td>{{ $post->site }}</td>
            <td>
              <a href="{{ action('Admin\BlogController@edit', $post->id) }}" class="fw-semibold text-decoration-none text-primary">
                {{ $post->title }}
              </a>
            </td>
            <td class="text-center">
              <form action="{{ route('admin.blog.toggleMarker', $post->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-sm {{ $post->marker == '1' ? 'btn-success' : 'btn-outline-secondary' }}">
                  <i class="fa {{ $post->marker == '1' ? 'fa-check' : 'fa-times' }}"></i>
                </button>
              </form>
            </td>
            <td class="text-center">
              {!! $post->visible == '1' ? '<i class="fa fa-eye text-success"></i>' : '<i class="fa fa-eye-slash text-danger"></i>' !!}
            </td>
            <td class="text-center">
              {!! $post->approved == '1' ? '<i class="fa fa-thumbs-up text-success"></i>' : '<i class="fa fa-thumbs-down text-danger"></i>' !!}
            </td>
            <td class="text-center">
              <a href="{{ action('Admin\BlogController@edit', $post->id) }}" class="btn btn-outline-warning btn-sm" title="Editar">
                <i class="fa fa-edit"></i>
              </a>
              <form action="{{ action('Admin\BlogController@destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que deseas eliminar este post?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger btn-sm" title="Eliminar">
                  <i class="fa fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

@section('scripts')
  var page = 'blog_index';
  @parent

  <script>
    function normalize(str) {
      return str ? str.toLowerCase() : '';
    }

    $('#filter-site, #filter-date, #search-input').on('input change', function () {
      const siteFilter = normalize($('#filter-site').val());
      const dateFilter = $('#filter-date').val();
      const searchText = normalize($('#search-input').val());

      $('#my-table tbody tr').each(function () {
        const row = $(this);
        const siteText = normalize(row.find('td:eq(2)').text());
        const dateText = row.find('td:eq(1)').text();
        const titleText = normalize(row.find('td:eq(3)').text());

        const matchSite = !siteFilter || siteText === siteFilter;
        const matchDate = !dateFilter || dateText.startsWith(dateFilter);
        const matchSearch = !searchText || siteText.includes(searchText) || titleText.includes(searchText) || dateText.includes(searchText);

        row.toggle(matchSite && matchDate && matchSearch);
      });
    });

    $('#clear-filters').on('click', function () {
      $('#filter-site').val('');
      $('#filter-date').val('');
      $('#search-input').val('');
      $('#my-table tbody tr').show();
    });
  </script>
@endsection
