@extends('admin.layouts.template')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-lg-10 mx-auto">
      <div class="card shadow-xl border-0 rounded-3">
        <div class="card-header bg-gradient-to-r from-primary to-secondary text-white d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Crear nuevo post</h5>
        </div>

        <div class="card-body">
          @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>¡Éxito!</strong> {{ Session::get('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <form method="POST" action="/admin/blog" enctype="multipart/form-data" onsubmit="setContent()">
            @csrf

            <div class="mb-4">
              <label for="create_title" class="form-label text-dark">Título</label>
              <input type="text" class="form-control shadow-lg p-3 rounded-3 focus:outline-none focus:ring-2 focus:ring-primary transition-all" id="create_title" name="title" placeholder="Escribe aquí el título" required>
            </div>

            <div class="row mb-4">
              <div class="col-md-6">
                <label for="create_site" class="form-label text-dark">Sección</label>
                <select class="form-select shadow-lg p-3 rounded-3 focus:outline-none focus:ring-2 focus:ring-primary transition-all" name="site" id="create_site" required>
                  <option selected disabled hidden>Seleccionar sitio</option>
                  <option value="academia">Academia</option>
                  <option value="colegio">Colegio</option>
                </select>
              </div>

              <div class="col-md-6 d-flex align-items-center mt-3 mt-md-0 gap-4">
                <div class="form-check">
                  <input class="form-check-input shadow-sm" type="checkbox" name="marker" id="create_marker" value="1">
                  <label class="form-check-label" for="create_marker">Marcado (fijo)</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input shadow-sm" type="checkbox" name="visible" id="create_draft" value="1">
                  <label class="form-check-label" for="create_draft">Borrador</label>
                </div>
              </div>
            </div>

            <div class="mb-4">
              <label for="create_content" class="form-label text-dark">Contenido</label>
              <div id="create_content"></div>
            </div>

            <div class="mb-4">
              <label for="image" class="form-label text-dark">Imágenes</label>
              <input type="file" class="form-control shadow-lg p-3 rounded-3 focus:outline-none focus:ring-2 focus:ring-primary transition-all" id="image" name="image[]" accept="image/*" multiple>
              <small class="form-text text-muted">
                Selecciona las imágenes que representarán el post. Puedes elegir varias.
              </small>
            </div>

            <div id="imagePreview" class="mb-4"></div>
            <div class="mb-4">
              <label for="main_image" class="form-label text-dark">Selecciona imagen principal</label>
              <input type="hidden" name="main_image" id="main_image">
            </div>

            <div class="mb-4">
              <label for="create_finish" class="form-label text-dark">Fecha</label>
              <input type="text" class="form-control shadow-lg p-3 rounded-3 focus:outline-none focus:ring-2 focus:ring-primary transition-all" name="created_at" id="create_finish" value="{{ now() }}" placeholder="Clic aquí para seleccionar fecha" required>
            </div>

            <div class="d-grid mb-4">
              <button type="submit" class="btn btn-success shadow-lg p-3 rounded-3 hover:scale-105 transition-all">
                Publicar
              </button>
            </div>

            <input type="hidden" name="content" id="quill_content"> <!-- Campo oculto para el contenido -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<!-- Quill.js -->
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script>
  // Inicialización de Quill.js
  var quill = new Quill('#create_content', {
    theme: 'snow',
    modules: {
      toolbar: [
        [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'align': [] }],
        ['bold', 'italic', 'underline'],
        ['link', 'image'],
        ['blockquote']
      ]
    }
  });

  // Función para establecer el contenido de Quill en el campo oculto antes de enviar el formulario
  function setContent() {
    var content = quill.root.innerHTML;  // Obtiene el contenido de Quill
    document.getElementById('quill_content').value = content;  // Asigna el contenido al campo oculto
  }

  // Previsualización de múltiples imágenes
  document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('image');
    const preview = document.getElementById('imagePreview');

    input.addEventListener('change', function () {
      preview.innerHTML = ''; // Limpiar previsualización anterior

      const files = this.files;
      if (files.length > 0) {
        Array.from(files).forEach((file, index) => {
          if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
              const img = document.createElement('img');
              img.src = e.target.result;
              img.className = 'img-thumbnail shadow-sm';
              img.style.maxWidth = '120px';
              img.style.maxHeight = '120px';
              img.style.objectFit = 'cover';
              img.setAttribute('data-index', index);  // Almacena el índice de la imagen

              // Evento para seleccionar imagen principal
              img.addEventListener('click', function () {
                // Remover la selección de otras imágenes
                const allImages = preview.querySelectorAll('img');
                allImages.forEach(img => img.classList.remove('border-primary'));

                // Marcar la imagen seleccionada como principal
                img.classList.add('border-primary');
                document.getElementById('main_image').value = index;  // Asignar el índice de la imagen seleccionada al campo oculto
              });

              preview.appendChild(img);
            };
            reader.readAsDataURL(file);
          }
        });
      }
    });
  });
</script>
@parent
@endsection
