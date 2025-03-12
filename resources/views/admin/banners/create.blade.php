@extends('admin.layouts.template')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
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
    <h1 class="h2">Nuevo banner</h1>
</div>

<div class="admin-banners" id="banners">
    <form method="post" action="/admin/banners">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="create_title">Título</label>
            <input type="text" class="form-control" name="title" id="create_title" placeholder="Escribe aquí el título" required>
        </div>

        <div class="form-group">
            <label for="create_section">Sección</label>
            <select class="form-control" name="type" id="create_section" required>
                <option selected hidden disabled>Seleccionar</option>
                <option value="index_academia">Academia</option>
                <option value="index_colegio">Colegio</option>
            </select>
        </div>

        <div class="form-group">
            <label for="create_content">Contenido</label>
            <textarea name="content" id="create_content" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="image_desktop_url">URL Imagen Desktop</label>
            <input type="text" class="form-control" name="file_desktop_url" id="image_desktop_url" placeholder="https://ejemplo.com/banner-desktop.jpg" required>
        </div>

        <div class="form-group">
            <label for="image_mobile_url">URL Imagen Móvil</label>
            <input type="text" class="form-control" name="file_mobile_url" id="image_mobile_url" placeholder="https://ejemplo.com/banner-mobile.jpg" required>
        </div>

        <div class="form-group">
            <label for="create_start">Inicio</label>
            <input type="text" class="form-control" name="start" id="create_start" value="{{ date('Y-m-d H:i:s') }}" placeholder="Clic aquí para seleccionar fecha" required>
        </div>

        <div class="form-group">
            <label for="create_expire">Fin</label>
            <input type="text" class="form-control" name="expire" id="create_expire" value="{{ date('Y-m-d H:i:s') }}" placeholder="Clic aquí para seleccionar fecha" required>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>

    </form>
</div>

@endsection

@section('scripts')
  var page = 'banners_create';
  @parent
@endsection
