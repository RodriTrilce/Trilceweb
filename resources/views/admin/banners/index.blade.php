@extends('admin.layouts.template')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestión de Banners</h1>
        <a href="{{ url('/admin/banners/create') }}" class="btn btn-primary">+ Nuevo Banner</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Posición</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="sortable-banners">
              @foreach ($banners as $banner)
                  <tr data-id="{{ $banner->id }}">
                      <td class="handle" style="cursor: grab;">&#x2630;</td> 
                      <td>{{ $banner->title }}</td>
                      <td><span class="badge bg-info">{{ $banner->type }}</span></td>
                      <td>
                          <span class="badge {{ $banner->state ? 'bg-success' : 'bg-danger' }}">
                              {{ $banner->state ? 'Activo' : 'Inactivo' }}
                          </span>
                      </td>
                      <td>{{ $banner->position }}</td>
                      <td>
                          <div class="btn-group">
                              <a href="{{ route('admin.banners.edit', $banner->id) }}" class="btn btn-warning btn-sm">Editar</a>
                              <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST"
                                  onsubmit="return confirm('¿Seguro que deseas eliminar este banner?');">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                              </form>
                          </div>
                      </td>
                  </tr>
              @endforeach
          </tbody>
          
        </table>

        <button id="saveOrderBtn" class="btn btn-success mt-3">Actualizar Orden</button>
        <p id="status-message"></p>


    </div>

    <h2 class="mt-5">Vista previa de Banners</h2>
    <div class="row">
        @foreach ($banners as $banner)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $banner->title }}</h5>

                        <p class="mb-2"><strong>Vista previa Desktop:</strong></p>
                        @if ($banner->file_desktop_url)
                            <img src="{{ $banner->file_desktop_url }}" alt="Banner Desktop"
                                class="img-fluid rounded border">
                        @else
                            <p class="text-muted">No hay imagen para desktop</p>
                        @endif

                        <p class="mt-3 mb-2"><strong>Vista previa Mobile:</strong></p>
                        @if ($banner->file_mobile_url)
                            <img src="{{ $banner->file_mobile_url }}" alt="Banner Mobile" class="img-fluid rounded border">
                        @else
                            <p class="text-muted">No hay imagen para móvil</p>
                        @endif

                        <div class="mt-3">
                            <a href="{{ route('admin.banners.edit', $banner->id) }}"
                                class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST"
                                class="d-inline" onsubmit="return confirm('¿Seguro que deseas eliminar este banner?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    <script>
        var page = 'banners_index';
    </script>
    @parent
@endsection