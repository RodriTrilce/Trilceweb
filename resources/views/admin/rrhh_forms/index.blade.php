@extends('admin.layouts.template')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Recursos Humanos: Formularios</h1>
    </div>

    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <button class="btn btn-danger me-2" id="exportar_pdf">
                        <i class="fas fa-file-pdf"></i> Exportar a PDF
                    </button>
                    <button class="btn btn-success" id="export_excel">
                        <i class="fas fa-file-excel"></i> Exportar a Excel
                    </button>
                </div>
                <div>
                    <select class="form-select w-auto">
                        <option value="">Exportación básica</option>
                        <option value="all">Exportar todos</option>
                        <option value="selected">Exportar selección</option>
                    </select>
                </div>
            </div>

            <div class="table-responsive">
                <table id="my-table"
                    class="table table-striped table-hover align-middle"
                    data-toggle="table"
                    data-show-export="true"
                    data-pagination="true"
                    data-click-to-select="true"
                    data-maintain-selected="true"
                    data-toolbar="#toolbar"
                    data-show-toggle="true"
                    data-sort-name="date"
                    data-sort-order="desc"
                    data-height="760"
                    data-show-pagination-switch="true"
                    data-page-list="[10, 25, 50, 100, 200, All]"
                    data-export-options='{
                        "fileName": "{{$type}}_{{date("Y-m-d")}}",
                        "ignoreColumn": ["state"]
                    }'>
                    
                    <thead class="table-dark">
                        <tr>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="nro" data-sortable="true">#</th>
                            <th data-field="register" data-sortable="true">Fecha de registro</th>
                            <th data-field="dni" data-sortable="true">DNI</th>
                            <th data-field="nombre" data-sortable="true">Nombre</th>
                            <th data-field="email" data-sortable="true">Email</th>
                            <th data-field="telefono" data-sortable="true">Teléfono</th>
                            <th data-field="carrera" data-sortable="true">Carrera</th>
                            <th data-field="centro_estudios" data-sortable="true">Centro de Estudios</th>
                            <th data-field="distrito" data-sortable="true">Distrito</th>
                            <th data-field="expectativa_salarial" data-sortable="true">Expectativa salarial</th>
                            <th data-field="experiencia" data-sortable="true">Experiencia</th>
                            <th data-field="experiencia_detalle">Experiencia Detalle</th>
                            <th data-field="porque_trilce">¿Por qué Trilce?</th>
                            <th data-field="porque_tutora">¿Por qué el puesto?</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $fila)
                        <tr>
                            <td></td>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $fila->register }}</td>
                            <td>{{ $fila->dni }}</td>
                            <td>{{ $fila->nombre }}</td>
                            <td>{{ $fila->email }}</td>
                            <td>{{ $fila->telefono }}</td>
                            <td>{{ $fila->carrera }}</td>
                            <td>{{ $fila->centro_estudios }}</td>
                            <td>{{ $fila->distrito }}</td>
                            <td>{{ $fila->expectativa_salarial }}</td>
                            <td>{{ $fila->experiencia }}</td>
                            <td>{{ $fila->experiencia_detalle }}</td>
                            <td>{{ $fila->porque_trilce }}</td>
                            <td>{{ $fila->porque_tutora }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var page = 'rrhh_forms';
</script>
@parent
@endsection
