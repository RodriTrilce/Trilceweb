@extends('admin.layouts.template')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fa fa-folder"></i> Administrador de Archivos</h1>
  </div>

  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {!! Session::get('success') !!}
    </div>
  @endif

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.1/bootstrap-table.min.css">

  <div class="alert alert-info">
    <strong><i class="fa fa-info-circle"></i> Importante:</strong>
    <ul>
      <li>Algunos archivos no pueden eliminarse porque están vinculados a secciones administradas por separado, como <strong>blog</strong> u <strong>olimpiadas matemáticas</strong>.</li>
      <li>Eliminar archivos con cuidado para evitar enlaces rotos.</li>
      <li>Al eliminar un archivo, se eliminará tanto de la base de datos como del servidor de manera permanente. <strong>¡Actuar con precaución!</strong></li>
    </ul>
  </div>

  <div class="d-flex justify-content-between mb-3">
    <div id="toolbar">
      <select class="form-control">
        <option value="">Exportación básica</option>
        <option value="all">Exportar todos</option>
        <option value="selected">Exportar selección</option>
      </select>
    </div>
  </div>

  <table id="my-table"
    class="table table-striped table-bordered"
    data-pagination="true"
    data-click-to-select="true"
    data-maintain-selected="true"
    data-toolbar="#toolbar"
    data-show-toggle="true"
    data-show-footer="true"
    data-sort-name="fecha_creacion"
    data-sort-order="desc"
    data-height="760"
    data-show-refresh="true"
    data-show-columns="true"
    data-show-pagination-switch="true"
    data-page-list="[10, 25, 50, 100, 200, 'All']"
    data-export-options='{"fileName": "files_export_{{ date("Y-m-d") }}", "ignoreColumn": ["state"]}'>
    <thead class="thead-dark">
      <tr>
        <th data-field="nro" data-sortable="true">#</th>
        <th data-field="fecha_creacion" data-sortable="true">Fecha Creación</th>
        <th data-field="type" data-sortable="true">Tipo</th>
        <th data-field="name" data-sortable="true">Nombre</th>
        <th data-field="description">Descripción</th>
        <th data-field="size" data-sortable="true">Peso</th>
        <th data-field="url">URL</th>
        <th data-field="driver" data-sortable="true">Almacenamiento</th>
        <th data-field="dimension" data-sortable="true">Dimensiones</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($files as $file)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $file->created_at }}</td>
          <td>{{ $file->type }}</td>
          <td>{{ $file->name }}</td>
          <td>{{ $file->description }}</td>
          <td><span class="filesize" data-filesize="{{ $file->size }}">{{ $file->size }}</span></td>
          <td>
            <div class="mb-2">
              <small class="text-muted">URL E</small>
              <input type="text" class="form-control form-control-sm" onclick="this.select()" readonly value="http://www.trilce.edu.pe{{ $file->realFileUrl() }}">
              <a href="http://www.trilce.edu.pe{{ $file->realFileUrl() }}" target="_blank" class="btn btn-sm btn-info mt-1">Ver</a>
            </div>
            <div>
              <small class="text-muted">URL D</small>
              <input type="text" class="form-control form-control-sm" onclick="this.select()" readonly value="http://www.trilce.edu.pe/d/{{ $file->id }}/{{ str_slug($file->name, '-') }}.{{ $file->extension }}">
              <a href="http://www.trilce.edu.pe/d/{{ $file->id }}/{{ str_slug($file->name, '-') }}.{{ $file->extension }}" target="_blank" class="btn btn-sm btn-info mt-1">Ver</a>
            </div>
          </td>
          <td>{{ $file->location_driver }}</td>
          <td>{{ $file->dimension }}</td>
          <td class="text-center">
            @if(is_null($file->filesable_type))
              <form action="{{ action('Admin\FileManagerController@destroy', $file->id) }}" method="post" onsubmit="return secureDelete(this);" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" title="Eliminar" type="submit">
                  <i class="fa fa-trash"></i>
                </button>
              </form>
              <a href="{{ action('Admin\FileManagerController@edit', $file->id) }}" class="btn btn-sm btn-warning" title="Editar">
                <i class="fa fa-edit"></i>
              </a>
            @endif
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

@section('scripts')
  <script>
    var page = 'file_manager';
  </script>
  @parent
@endsection