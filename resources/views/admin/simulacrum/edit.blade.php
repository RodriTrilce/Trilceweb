@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar: {{ $simulacro->name}} </h1>
  </div>

@if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
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

  <form method="post" action="{{ route('simulacrum.update', $simulacro->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PATCH">

    <div class="form-group">
      <label for="f_name">Nombre</label>
      <input type="text" class="form-control" name="name" value="{{ $simulacro->name }}" id="f_name" autocomplete="off" placeholder="Escribe el nombre" required>
    </div>
    <div class="form-group">
      <label for="create_finish">Fecha del simulacro</label>
      <input type="text" value="{{ $simulacro->created_at }}" class="form-control" id="mo_finish" name="created_at" id="create_finish" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
    </div>

    <div class="form-group">
      <label for="f_university">Universidad</label>
      <select class="form-control" name="university_id" value="{{ $simulacro->university_id }}" id="f_university" required>
        <option value="1" {{ ($simulacro->university_id == '1' ? 'selected' : '') }}>UNI</option>
        <option value="2" {{ ($simulacro->university_id == '2' ? 'selected' : '') }}>San Marcos</option>
        <option value="3" {{ ($simulacro->university_id == '3' ? 'selected' : '') }}>Católica</option>
      </select>
    </div>    

    <div class="form-group">
     <label for="f_url">URL</label>
     <input required name="url" id="f_url" class="form-control" value="{{ $simulacro->url }}" placeholder="URL del simulacro (pdf)">
    </div>

    <div class="form-group">
     <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

  </form>


@endsection

@section('scripts')
  var page = 'simulacrum_edit'
  @parent
@endsection