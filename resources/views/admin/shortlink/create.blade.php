@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Nuevo shortlink</h1>
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

  <form method="post" action="/admin/shortlink" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="f_slug">Slug</label>
      <input type="text" class="form-control" name="slug" value="" id="f_slug" autocomplete="off" placeholder="Escribe la url acortada" required>
    </div>

    <div class="form-group">
     <label for="f_url">URL</label>
     <input required name="url" id="f_url" class="form-control" value="" placeholder="URL de destino">
    </div>

    <div class="form-group">
     <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

  </form>


@endsection

@section('scripts')
  var page = 'shortlink_create'
  @parent
@endsection