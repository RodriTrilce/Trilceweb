@extends('admin.layouts.template')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-file-alt"></i> Nuevo Solucionario</h1>
  </div>

  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="post" action="/admin/solutions" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="f_display">Año / Tipo</label>
      <input type="text" class="form-control" name="display" id="f_display" autocomplete="off" placeholder="Escribe el año" required>
    </div>

    <div class="form-group">
      <label for="create_finish">Fecha del simulacro</label>
      <small class="form-text text-muted">IMPORTANTE: Poner la fecha aproximada del examen, ya que se lista en la web según esta fecha.</small>
      <input type="date" class="form-control" id="create_finish" name="created_at" autocomplete="off" placeholder="Clic aquí para seleccionar fecha" required>
    </div>

    <div class="form-group">
      <label for="f_university">Universidad</label>
      <select class="form-control" name="university_id" id="f_university" required>
        <option selected hidden disabled>Seleccionar Universidad</option>
        <option value="1">UNI</option>
        <option value="2">San Marcos</option>
        <option value="3">Católica</option>
      </select>
    </div>

    @foreach(range(1, 4) as $i)
      <div class="form-group">
        <label for="f_exm_{{ $i }}">Examen {{ $i }}:</label>
        <input type="text" class="form-control" name="exm_{{ $i }}" id="f_exm_{{ $i }}" autocomplete="off" placeholder="Escribe el examen">
      </div>
    @endforeach

    <div class="form-group">
      <button class="btn btn-primary" type="submit">
        <i class="fas fa-paper-plane"></i> Enviar
      </button>
    </div>
  </form>
@endsection

@section('scripts')
  var page = 'solution_create';
  @parent
@endsection
