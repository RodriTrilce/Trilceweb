@extends('admin.layouts.template')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Simulacro: <strong>{{ $simulacro->name }}</strong></h1>
  </div>

  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ Session::get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="card shadow-sm">
    <div class="card-body">
      <form method="post" action="{{ route('simulacrum.update', $simulacro->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
          <label for="f_name">Nombre</label>
          <input type="text" class="form-control rounded" name="name" value="{{ $simulacro->name }}" id="f_name" autocomplete="off" placeholder="Escribe el nombre" required>
        </div>

        <div class="form-group">
          <label for="create_finish">Fecha del simulacro</label>
          <input type="date" class="form-control rounded" id="create_finish" name="created_at" value="{{ $simulacro->created_at->format('Y-m-d') }}" required>
        </div>

        <div class="form-group">
          <label for="f_university">Universidad</label>
          <select class="form-control rounded" name="university_id" id="f_university" required>
            <option disabled>Seleccionar universidad</option>
            <option value="1" {{ $simulacro->university_id == 1 ? 'selected' : '' }}>UNI</option>
            <option value="2" {{ $simulacro->university_id == 2 ? 'selected' : '' }}>San Marcos</option>
            <option value="3" {{ $simulacro->university_id == 3 ? 'selected' : '' }}>Católica</option>
          </select>
        </div>

        <div class="form-group">
          <label for="f_url">URL</label>
          <input type="url" class="form-control rounded" name="url" id="f_url" value="{{ $simulacro->url }}" placeholder="URL del simulacro (pdf)" required>
        </div>

        <div class="d-flex justify-content-end">
          <a href="{{ route('simulacrum.index', ['id' => $simulacro->university_id]) }}" class="btn btn-secondary mr-2">Cancelar</a>
          <button class="btn btn-primary" type="submit">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>

@endsection

@section('scripts')
  var page = 'simulacrum_edit';
  @parent;
@endsection
