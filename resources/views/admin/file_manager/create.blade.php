@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
    <h1 class="h2 text-primary"><i class="fas fa-upload"></i> Subir Archivos</h1>
  </div>

  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong><i class="fas fa-check-circle"></i> Éxito!</strong> {{ Session::get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
      <strong><i class="fas fa-exclamation-triangle"></i> Errores detectados:</strong>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  <div class="card shadow-lg border-0 rounded-lg p-4">
    <form method="post" action="/admin/filemanager" enctype="multipart/form-data" id="dropZoneForm" class="text-center">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="fileUpload" class="font-weight-bold text-primary">Arrastra y suelta tus archivos</label>
      </div>

    </form>
  </div>

  <div class="mt-4" id="fileTemplate" style="display: none;">
    <div class="card border-0 shadow-sm p-3">
      <div class="row align-items-center">
        <div class="col-md-2 text-center">
          <img data-dz-thumbnail class="img-thumbnail rounded-circle" />
        </div>
        <div class="col-md-6">
          <p><strong>Nombre:</strong> <span data-dz-name></span></p>
          <p><strong>Peso:</strong> <span data-dz-size></span></p>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="text-muted">URL Interna</label>
            <textarea onclick="this.focus();this.select()" readonly class="form-control" data-dz-url></textarea>
          </div>
          <div class="form-group">
            <label class="text-muted">URL de Descarga</label>
            <textarea onclick="this.focus();this.select()" readonly class="form-control" data-dz-urlcute></textarea>
          </div>
        </div>
      </div>
      <div class="progress mt-2">
        <div class="progress-bar bg-success" role="progressbar" data-dz-uploadprogress></div>
      </div>
      <div class="text-success mt-2 d-none" data-dz-successmessage><i class="fas fa-check-circle"></i> Archivo subido correctamente</div>
      <div class="text-danger mt-2 d-none" data-dz-errormessage><i class="fas fa-times-circle"></i> Error al subir</div>
    </div>
  </div>
@endsection

@section('scripts')
  var page = 'file_manager_create';
  @parent
@endsection
