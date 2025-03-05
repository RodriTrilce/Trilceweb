@extends('admin.layouts.template')

@section('content')
<div class="container mt-4">
  <div class="card shadow-lg border-0 rounded-4">
    <div class="card-header bg-primary text-white rounded-top-4">
      <h3 class="mb-0"><i class="fa fa-edit"></i> Editar Archivo: <strong>{{$file->name}}</strong></h3>
    </div>
    <div class="card-body p-4">
      
      @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
          <i class="fa fa-check-circle me-2"></i> 
          <strong>¡Éxito!</strong> {{ Session::get('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger d-flex align-items-center">
          <i class="fa fa-exclamation-circle me-2"></i> 
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="post" action="{{ route('filemanager.update', $file->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">

        <div class="row g-3">
          <div class="col-md-6">
            <label for="f_name" class="form-label">Nombre del Archivo</label>
            <input type="text" class="form-control shadow-sm" name="name" id="f_name" value="{{$file->name}}" placeholder="Ejemplo: documento" required>
          </div>
          <div class="col-md-6">
            <label for="f_type" class="form-label">Tipo</label>
            <input type="text" class="form-control shadow-sm" name="type" id="f_type" value="{{$file->type}}" placeholder="Ejemplo: imagen, documento" required>
          </div>
        </div>

        <div class="form-floating my-3">
          <textarea class="form-control shadow-sm" name="description" id="f_description" placeholder="Escribe una breve descripción">{{$file->description}}</textarea>
          <label for="f_description">Descripción</label>
        </div>

        <div class="row g-3">
          <div class="col-md-6">
            <label for="f_extension" class="form-label">Extensión</label>
            <input type="text" class="form-control shadow-sm" name="extension" id="f_extension" value="{{$file->extension}}" placeholder="Ejemplo: .jpg, .pdf" required>
            <small class="text-danger d-block mt-1"><i class="fa fa-exclamation-triangle"></i> Debe coincidir con el archivo real</small>
          </div>
        </div>

        <div class="text-end mt-4">
          <button class="btn btn-success shadow-sm px-4 py-2 fw-bold" type="submit">
            <i class="fa fa-save"></i> Guardar Cambios
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  var page = 'file_manager_edit';
  @parent
@endsection
