@extends('admin.layouts.template')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
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

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar banner</h1>
</div>

<div class="admin-banners" id="banners">
    <form method="post" action="{{ route('banners.update', $banner->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group">
            <label for="create_title">Título</label>
            <input type="text" class="form-control" name="title" id="create_title" autocomplete="off" placeholder="Escribe aquí el título" value="{{ $banner->title }}" required>
        </div>

        <div class="form-group">
            <input type="checkbox" id="create_state" name="state" class="switch-input" {{ $banner->state == 1 ? 'checked' : '' }}>
            <label for="create_state" class="switch-label">
                Visible
                <span class="toggle--on">Sí</span>
                <span class="toggle--off">No</span>
            </label>
        </div>

        <div class="form-group">
            <label for="create_section">Sección</label>
            <select class="form-control" name="type" id="create_section" required>
                <option value="index_academia" {{ $banner->type == 'index_academia' ? 'selected' : '' }}>Academia</option>
                <option value="index_colegio" {{ $banner->type == 'index_colegio' ? 'selected' : '' }}>Colegio</option>
            </select>
        </div>

        <div class="form-group">
            <label for="create_content">Contenido</label>
            <textarea name="content" id="create_content" cols="30" rows="5" class="form-control">{!! $banner->content !!}</textarea>
        </div>

        <div class="form-group">
            <label for="image_desktop_url">URL Imagen Desktop</label>
            <input type="text" class="form-control" name="file_desktop_url" id="image_desktop_url" value="{{ $banner->file_desktop_url }}" placeholder="https://ejemplo.com/banner-desktop.jpg" required>
        </div>

        <div class="form-group">
            <label for="image_mobile_url">URL Imagen Móvil</label>
            <input type="text" class="form-control" name="file_mobile_url" id="image_mobile_url" value="{{ $banner->file_mobile_url }}" placeholder="https://ejemplo.com/banner-mobile.jpg" required>
        </div>

        <div class="form-group">
            <label for="create_start">Inicio</label>
            <input type="text" class="form-control" id="create_start" name="start" value="{{ $banner->start }}" autocomplete="off" placeholder="Clic aquí para seleccionar fecha" required>
        </div>

        <div class="form-group">
            <label for="create_expire">Fin</label>
            <input type="text" class="form-control" id="create_expire" name="expire" value="{{ $banner->expire }}" autocomplete="off" placeholder="Clic aquí para seleccionar fecha" required>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')
  var page = 'banners_edit';
  @parent
@endsection
