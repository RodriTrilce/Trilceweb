@extends('admin.layouts.template')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fa fa-folder"></i> Administrador de Archivos</h1>
  </div>

  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">{!! Session::get('success') !!}</div>
  @endif

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.1/bootstrap-table.min.css">

  <div class="alert alert-info">
    <strong><i class="fa fa-info-circle"></i> Importante:</strong>
    <ul class="mb-0">
    <li>Algunos archivos no pueden eliminarse porque están vinculados a secciones como <strong>blog</strong> u
      <strong>olimpiadas matemáticas</strong>.</li>
    <li>Eliminar archivos con cuidado para evitar enlaces rotos.</li>
    <li>La eliminación es permanente tanto en base de datos como en servidor. <strong>¡Actuar con precaución!</strong>
    </li>
    </ul>
  </div>

  <div class="d-flex justify-content-between mb-3">
    <div id="toolbar">
    <select class="form-control">
      <option value="">Exportación básica</option>
      <option value="all">Exportar todos</option>
      <option value="selected">Exportar selección</option>
    </select>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="checkbox" id="enablePreviews" checked>
    <label class="form-check-label" for="enablePreviews">Mostrar previsualizaciones</label>
    </div>
  </div>

  <div class="d-flex justify-content-between mb-3">
    <div id="toolbar" class="btn-group">
      <button id="delete-selected" class="btn btn-danger" disabled>
        <i class="fa fa-trash"></i> Eliminar Selección
      </button>
    </div>
  </div>

  <table id="my-table" class="table table-striped table-bordered" data-toggle="table" data-pagination="true"
    data-click-to-select="true" data-maintain-selected="true" data-toolbar="#toolbar" data-show-toggle="true"
    data-show-footer="true" data-sort-name="fecha_creacion" data-sort-order="desc" data-height="760"
    data-show-refresh="true" data-show-columns="true" data-show-pagination-switch="true"
    data-page-list="[10, 15, 25, 50, 100]" data-page-size="15" data-side-pagination="client"
    data-export-options='{"fileName": "files_export_{{ date("Y-m-d") }}", "ignoreColumn": ["state"]}'>

    <thead class="thead-dark">
      <tr>
        <th data-field="state" data-checkbox="true"></th>
        <th data-field="nro" data-formatter="indexFormatter" data-align="center">#</th>
        <th data-field="preview">Vista Previa</th>
        <th data-field="fecha_creacion" data-sortable="true">Fecha Creación</th>
        <th data-field="type" data-sortable="true">Tipo</th>
        <th data-field="name" data-sortable="true">Nombre</th>
        <th data-field="description">Descripción</th>
        <th data-field="size" data-sortable="true">Peso</th>
        <th data-field="url">URL</th>
        <th data-field="driver" data-sortable="true">Almacenamiento</th>
        <th data-field="dimension" data-sortable="true">Dimensiones</th>
        <th>Acciones</th>
      </tr>
    </thead>
      

    <tbody>
    @foreach($files as $file)
      @php
      $ext = strtolower($file->extension ?? '');
      $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg']);
      $isPdf = $ext === 'pdf';
      $isAudio = in_array($ext, ['mp3', 'wav', 'ogg', 'flac', 'aac']);
      $isDoc = in_array($ext, ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx']);
      $isZip = in_array($ext, ['zip', 'rar', '7z', 'tar', 'gz']);
      @endphp

      <tr>
      <td>{{ $loop->iteration }}</td>

      {{-- Vista previa --}}
      <td>
      <div class="file-preview"
        style="width: 80px; height: 60px; position: relative; overflow: hidden; border-radius: 4px; background: #f8f9fa;">
        @if($isImage)
      <div class="image-placeholder d-flex align-items-center justify-content-center bg-light"
      style="cursor: pointer;" data-src="http://www.trilce.edu.pe{{ $file->realFileUrl() }}"
      data-name="{{ $file->name }}"
      onclick="showImageModal(`{{ addslashes($file->name) }}`, `http://www.trilce.edu.pe{{ $file->realFileUrl() }}`)"
      <i class="fa fa-image text-muted" style="font-size: 24px;"></i>
      </div>
      @elseif($isPdf)
      <div class="d-flex align-items-center justify-content-center bg-danger text-white" style="cursor: pointer;"
      onclick="window.open('http://www.trilce.edu.pe{{ $file->realFileUrl() }}', '_blank')">
      <i class="fa fa-file-pdf-o" style="font-size: 24px;"></i>
      </div>
      @elseif($isAudio)
      <div class="d-flex align-items-center justify-content-center bg-info text-white" style="cursor: pointer;"
      onclick="showAudioModal('{{ $file->name }}', 'http://www.trilce.edu.pe{{ $file->realFileUrl() }}')">
      <i class="fa fa-music" style="font-size: 24px;"></i>
      </div>
      @elseif($isDoc)
        <div class="d-flex align-items-center justify-content-center bg-primary text-white" style="cursor: pointer;"
        onclick="window.open('http://www.trilce.edu.pe{{ $file->realFileUrl() }}', '_blank')">
        @if(in_array($ext, ['doc', 'docx']))
      <i class="fa fa-file-word-o" style="font-size: 24px;"></i>
      @elseif(in_array($ext, ['xls', 'xlsx']))
      <i class="fa fa-file-excel-o" style="font-size: 24px;"></i>
      @elseif(in_array($ext, ['ppt', 'pptx']))
      <i class="fa fa-file-powerpoint-o" style="font-size: 24px;"></i>
      @endif
        </div>
      @elseif($isZip)
      <div class="d-flex align-items-center justify-content-center bg-warning text-dark">
      <i class="fa fa-file-archive-o" style="font-size: 24px;"></i>
      </div>
      @else
      <div class="d-flex align-items-center justify-content-center bg-secondary text-white">
      <i class="fa fa-file-o" style="font-size: 24px;"></i>
      </div>
      @endif

        <div class="file-extension"
        style="position: absolute; bottom: 1px; right: 1px; background: rgba(0,0,0,0.8); color: white; font-size: 8px; padding: 1px 2px; border-radius: 2px; line-height: 1;">
        {{ strtoupper($ext) }}
        </div>
      </div>
      </td>

      <td>{{ $file->created_at }}</td>
      <td>{{ $file->type }}</td>
      <td>{{ $file->name }}</td>
      <td>{{ $file->description }}</td>
      <td><span class="filesize" data-filesize="{{ $file->size }}">{{ $file->size }}</span></td>

      <td>
      <div class="mb-2">
        <small class="text-muted">URL E</small>
        <input type="text" class="form-control form-control-sm" readonly onclick="this.select()"
        value="http://www.trilce.edu.pe{{ $file->realFileUrl() }}">
        <a href="http://www.trilce.edu.pe{{ $file->realFileUrl() }}" class="btn btn-sm btn-info mt-1"
        target="_blank">Ver</a>
      </div>
      <div>
        <small class="text-muted">URL D</small>
        <input type="text" class="form-control form-control-sm" readonly onclick="this.select()"
        value="http://www.trilce.edu.pe/d/{{ $file->id }}/{{ str_slug($file->name, '-') }}.{{ $file->extension }}">
        <a href="http://www.trilce.edu.pe/d/{{ $file->id }}/{{ str_slug($file->name, '-') }}.{{ $file->extension }}"
        class="btn btn-sm btn-info mt-1" target="_blank">Ver</a>
      </div>
      </td>

      <td>{{ $file->location_driver }}</td>
      <td>{{ $file->dimension }}</td>

      <td class="text-center">
      @if(is_null($file->filesable_type))
      <form action="{{ action('Admin\FileManagerController@destroy', $file->id) }}" method="POST" class="d-inline"
      onsubmit="return secureDelete(this);">
      @csrf
      @method('DELETE')
      <button class="btn btn-sm btn-danger" type="submit" title="Eliminar"><i class="fa fa-trash"></i></button>
      </form>
      <a href="{{ action('Admin\FileManagerController@edit', $file->id) }}" class="btn btn-sm btn-warning"
      title="Editar">
      <i class="fa fa-edit"></i>
      </a>
      @endif
      </td>
      </tr>
    @endforeach
    </tbody>
  </table>

  <!-- Modal para imágenes -->
  <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content position-relative">

      <!-- Botón "X" fuera del header -->
      <button type="button" class="close btn btn-link p-0 m-0" data-dismiss="modal" aria-label="Cerrar"
      style="position: absolute; top: -10px; right: -10px; font-size: 2rem; z-index: 1051;">
      <span aria-hidden="true">&times;</span>
      </button>

      <div class="modal-header justify-content-center">
      <h5 class="modal-title w-100 text-center" id="imageModalTitle"></h5>
      </div>

      <div class="modal-body text-center p-2">
      <div id="imageModalLoading" class="d-flex flex-column align-items-center justify-content-center d-none"
        style="min-height: 200px;">
        <i class="fa fa-spinner fa-spin fa-2x mb-2"></i>
        <p class="mb-0">Cargando imagen...</p>
      </div>
      <img id="imageModalImg" class="img-fluid" style="max-height: 70vh; display: none;">
      </div>

      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <a id="imageModalDownload" href="" target="_blank" class="btn btn-primary">
        <i class="fa fa-download"></i> Descargar
      </a>
      </div>
    </div>
    </div>
  </div>

  {{-- Modal de audio --}}
  <div class="modal fade" id="audioModal" tabindex="-1" role="dialog" aria-labelledby="audioModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="audioModalTitle"></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body text-center">
      <audio id="audioModalPlayer" controls style="width: 100%;">
        Tu navegador no soporta el elemento audio.
      </audio>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    </div>
  </div>

  {{-- Estilos personalizados --}}
  <style>
    .modal-backdrop {
    z-index: 1040;
    }

    .modal {
    z-index: 1050;
    }

    .bootstrap-table .fixed-table-container,
    .table-responsive {
    z-index: 1;
    position: relative;
    }

    .fixed-table-pagination {
    margin-top: 20px;
    }

    .fixed-table-pagination .pagination {
    justify-content: center;
    }

    .table th {
    background-color: #343a40;
    color: white;
    }

    .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, .05);
    }

    div#imageModalLoading {
    display: none !important;
    }
  </style>
@endsection

@section('scripts')
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.1/bootstrap-table.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.1/locale/bootstrap-table-es-ES.min.js"></script>

  <script>
    var page = 'file_manager';
    let lazyLoadImages = [];
    let imageObserver;

    document.addEventListener('DOMContentLoaded', function () {
    $('#my-table').bootstrapTable({
      locale: 'es-ES',
      pagination: true,
      pageSize: 15,
      pageList: [10, 15, 25, 50, 100],
      sidePagination: 'client',
      showRefresh: true,
      showToggle: true,
      showColumns: true,
      showPaginationSwitch: true,
      sortName: 'fecha_creacion',
      sortOrder: 'desc',
      maintainSelected: true,
      clickToSelect: true,
      toolbar: '#toolbar',
      height: 760,
      showFooter: true,
      onPostBody: function () {
      setTimeout(() => {
        if (document.getElementById('enablePreviews').checked) {
        initializeLazyLoading();
        }
      }, 100);
      }
    });

    initializeLazyLoading();

    document.getElementById('enablePreviews').addEventListener('change', function () {
      this.checked ? enablePreviews() : disablePreviews();
    });

    $('.modal').on('show.bs.modal', () => $('body').addClass('modal-open'));
    $('.modal').on('hidden.bs.modal', function () {
      $('body').removeClass('modal-open');
      $(this).find('video, audio, img').each(function () {
      this.src = '';
      });
    });
    });

    function initializeLazyLoading() {
    lazyLoadImages = document.querySelectorAll('.image-placeholder[data-src]');
    if ('IntersectionObserver' in window) {
      if (imageObserver) imageObserver.disconnect();
      imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
        loadImage(entry.target);
        observer.unobserve(entry.target);
        }
      });
      }, { rootMargin: '50px 0px', threshold: 0.01 });

      lazyLoadImages.forEach(el => imageObserver.observe(el));
    } else {
      lazyLoadImages.forEach(loadImage);
    }
    }

    function loadImage(placeholder) {
    const src = placeholder.dataset.src;
    const loadingSpinner = placeholder.querySelector('.loading-spinner');
    const placeholderIcon = placeholder.querySelector('.placeholder-icon');

    if (loadingSpinner && placeholderIcon) {
      placeholderIcon.style.display = 'none';
      loadingSpinner.style.display = 'block';
    }

    const img = new Image();
    img.onload = function () {
      placeholder.innerHTML = '';
      Object.assign(img.style, {
      width: '100%',
      height: '100%',
      objectFit: 'cover',
      cursor: 'pointer'
      });
      placeholder.appendChild(img);

      const extension = placeholder.parentElement.querySelector('.file-extension');
      if (extension) placeholder.appendChild(extension);
    };
    img.onerror = function () {
      placeholder.innerHTML = '<i class="fa fa-exclamation-triangle text-warning" style="font-size: 18px;"></i>';
      const extension = placeholder.parentElement.querySelector('.file-extension');
      if (extension) placeholder.appendChild(extension);
    };
    img.src = src;
    }

    function enablePreviews() {
    document.querySelectorAll('.image-placeholder').forEach(el => el.style.display = 'flex');
    initializeLazyLoading();
    }

    function disablePreviews() {
    document.querySelectorAll('.image-placeholder').forEach(el => {
      el.innerHTML = '<i class="fa fa-eye-slash text-muted" style="font-size: 18px;"></i>';
    });
    if (imageObserver) imageObserver.disconnect();
    }

    function showImageModal(title, src) {
    const modal = $('#imageModal');
    document.getElementById('imageModalTitle').textContent = title;
    const modalImg = document.getElementById('imageModalImg');
    const loading = document.getElementById('imageModalLoading');
    const downloadBtn = document.getElementById('imageModalDownload');

    modalImg.style.display = 'none';
    loading.classList.remove('d-none');
    loading.innerHTML = `
      <i class="fa fa-spinner fa-spin fa-2x mb-2"></i>
      <p class="mb-0">Cargando imagen...</p>
      `;
    downloadBtn.href = src;

    const img = new Image();
    img.onload = function () {
      loading.classList.add('d-none');
      modalImg.src = src;
      modalImg.style.display = 'block';

    };
    img.onerror = function () {
      loading.innerHTML = `
        <i class="fa fa-exclamation-triangle text-warning fa-2x mb-2"></i>
        <p class="mb-0">Error al cargar la imagen</p>
      `;
    };
    img.src = src;

    modal.modal('show');
    }

    function showAudioModal(title, src) {
    document.getElementById('audioModalTitle').textContent = title;
    document.getElementById('audioModalPlayer').src = src;
    $('#audioModal').modal('show');
    }

    function secureDelete(form) {
    return confirm('¿Estás seguro de que deseas eliminar este archivo? Esta acción no se puede deshacer.');
    }
  </script>
  @parent
@endsection