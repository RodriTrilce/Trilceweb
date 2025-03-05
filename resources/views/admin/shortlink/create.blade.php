@extends('admin.layouts.template')
@section('content')
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center pb-3 border-bottom">
    <h1 class="h2 fw-bold text-primary">✨ Nuevo Shortlink</h1>
  </div>

  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle-fill"></i> {{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li><i class="bi bi-exclamation-triangle-fill"></i> {{ $error }}</li>
        @endforeach
      </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body p-4">
          <h4 class="text-center fw-semibold text-dark mb-3">Acorta tu URL 🚀</h4>
          
          <form method="post" action="/admin/shortlink" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="mb-3">
              <label for="f_slug" class="form-label fw-semibold">Slug</label>
              <input type="text" class="form-control form-control-lg rounded-3 border-light shadow-sm" name="slug" id="f_slug" autocomplete="off" placeholder="Ejemplo: mi-enlace" required>
            </div>

            <div class="mb-3">
              <label for="f_url" class="form-label fw-semibold">URL de destino</label>
              <input type="url" name="url" id="f_url" class="form-control form-control-lg rounded-3 border-light shadow-sm" placeholder="https://ejemplo.com" required>
            </div>

            <div class="d-grid">
              <button class="btn btn-lg text-white btn-gradient py-2 rounded-3" type="submit">⚡ Acortar Enlace</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* Botón con degradado */
  .btn-gradient {
    background: linear-gradient(135deg, #4C5FD5, #6C87F1);
    border: none;
    transition: all 0.3s ease-in-out;
  }
  .btn-gradient:hover {
    background: linear-gradient(135deg, #3B4BC9, #5A76E1);
    transform: scale(1.05);
  }

  /* Inputs con efecto hover */
  .form-control:focus {
    border-color: #6C87F1;
    box-shadow: 0 0 10px rgba(108, 135, 241, 0.3);
  }
</style>

@endsection

@section('scripts')
  var page = 'shortlink_create';
  @parent
@endsection
