@extends('admin.layouts.template')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-file-alt"></i> Solucionarios: <strong>{{ $university->short_name }}</strong></h1>
  </div>

  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <div id="toolbar" class="mb-3">
        <select class="form-control">
          <option value="">Exportación básica</option>
          <option value="all">Exportar todos</option>
          <option value="selected">Exportar selección</option>
        </select>
      </div>

      <div class="table-responsive">
        <table id="my-table"
            class="table table-bordered table-hover"
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
            }'>
          <thead class="thead-dark">
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

              <th data-field="updated_at" data-sortable="true">Última actualización</th>
              <th data-field="op">Operaciones</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($solutions as $solution)
              <tr>
                <td>{{ $solution->created_at }}</td>
                <td>{{ $solution->display }}</td>

                @foreach(range(1, 4) as $i)
                  @if(isset($solution->{'exm_'.$i}))
                    <td>
                      @if($solution->{'exm_'.$i})
                        <a href="{{ $solution->{'exm_'.$i} }}" target="_blank" class="btn btn-link text-primary">
                          <i class="fas fa-file-pdf"></i> Ver archivo
                        </a>
                      @endif
                    </td>
                  @endif
                @endforeach

                <td>{{ $solution->updated_at }}</td>
                <td class="text-center">
                  <form action="{{ action('Admin\SolutionResource@destroy', $solution->id) }}" method="post" onsubmit="return secureDelete(this);" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id_university" value="{{ $university->id }}">
                    <button class="btn btn-danger btn-sm" title="Eliminar" type="submit">
                      <i class="fa fa-trash"></i>
                    </button>
                  </form>

                  <a href="{{ action('Admin\SolutionResource@edit', $solution->id) }}" class="btn btn-warning btn-sm" title="Editar">
                    <i class="fa fa-edit"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
  var page = 'solution';
  @parent;
@endsection
