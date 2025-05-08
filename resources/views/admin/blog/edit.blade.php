@extends('admin.layouts.template')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-lg-10 mx-auto">
      <div class="card shadow-xl border-0 rounded-3">
        <div class="card-header bg-gradient-to-r from-primary to-secondary text-white d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Editar: {{ $post->title }}</h5>
        </div>

        <div class="card-body">
          @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>¡Éxito!</strong> {{ Session::get('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error:</strong> {{ Session::get('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <form method="POST" action="{{ route('blog.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-4">
              <label for="create_title" class="form-label text-dark">Título</label>
              <input type="text" class="form-control" name="title" id="create_title" value="{{ $post->title }}" required>
            </div>

            <div class="row mb-4">
              <div class="col-md-6">
                <label for="create_site" class="form-label text-dark">Sección:</label>
                <div class="switch-group" id="custom_switch_site">
                  <input type="radio" name="site" id="switch_academia" value="academia" {{ $post->site == 'academia' ? 'checked' : '' }}>
                  <label for="switch_academia">Academia</label>
                
                  <input type="radio" name="site" id="switch_colegio" value="colegio" {{ $post->site == 'colegio' ? 'checked' : '' }}>
                  <label for="switch_colegio">Colegio</label>
                </div>
              </div>

              <div class="col-md-6 mt-3 mt-md-0">
                <div class="custom-toggle-group">
                  <div class="custom-toggle">
                    <input type="checkbox" id="create_marker" name="marker" value="1" {{ $post->marker ? 'checked' : '' }}>
                    <label for="create_marker">Marcado (fijo)</label>
                  </div>
              
                  <div class="custom-toggle">
                    <input type="checkbox" id="create_draft" name="visible" value="1" {{ $post->visible ? 'checked' : '' }}>
                    <label for="create_draft">Visible</label>
                  </div>
              
                  @if (Auth::user()->hasRole('admin'))
                  <div class="custom-toggle">
                    <input type="checkbox" id="create_approved" name="approved" value="1" {{ $post->approved ? 'checked' : '' }}>
                    <label for="create_approved">Aprobado</label>
                  </div>
                  @endif
                </div>
              </div>
              
              
            </div>

            <div class="mb-4">
              <label for="create_content" class="form-label text-dark">Contenido</label>
              <textarea id="editor" name="content">{!! $post->content !!}</textarea>
            </div>

            <div class="d-grid mb-4">
              <button type="submit" class="btn btn-primary btn-lg shadow rounded-pill px-4">
                <i class="bi bi-arrow-repeat me-2"></i>Actualizar post
              </button>            </div>
          </form>

          <hr class="my-5">

          <h4 class="mb-3">Imágenes del post</h4>
          <div class="row">
            @foreach ($post->blogGallery->images as $image)
              <div class="col-md-3 mb-4 position-relative">
                <div class="card shadow-sm">
                  <a href="{{ $image->blogImage() }}" target="_blank">
                    <img src="{{ $image->blogImage(true) }}" class="card-img-top {{ $image->id == $post->file_id ? 'border border-primary' : '' }}" style="height: 200px; object-fit: cover;" alt="Imagen del post">
                  </a>
                  <div class="card-body p-2 text-center">
                    @if ($image->id == $post->file_id)
                      <span class="badge bg-primary mb-2">Principal</span>
                    @endif

                    <form action="{{ action('Admin\FileManagerController@destroy', $image->id) }}" method="POST" class="d-inline-block me-2" onsubmit="return confirm('¿Eliminar esta imagen?');">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="_filesable" value="blog">
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                      <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>

                    <form action="{{ action('Admin\FileManagerController@destroy', $image->id) }}" method="POST" class="d-inline-block">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="_filesable" value="blog-hacer-principal">
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                      <button type="submit" class="btn btn-sm btn-outline-primary" title="Marcar como principal">
                        <i class="fa fa-star"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
  var page = 'blog_edit';
</script>
@parent

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script> CKEDITOR.replace('editor'); </script>
@endsection
