@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar: {{$file->name}}</h1>
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
  <form method="post" action="{{ route('filemanager.update',$file->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PATCH">

    <div class="form-group">
      <label for="f_name">Nombre</label>
      <input type="text" class="form-control" name="name" value="{{$file->name}}" id="f_name" autocomplete="off" placeholder="Escribe aquí el nombre" required>
    </div>

    <div class="form-group">
     <label for="f_description">Descripción</label>
     <textarea name="description" id="f_description" cols="30" rows="10" class="form-control">
       {{$file->description}}
     </textarea>
    </div>

    <div class="form-group">
      <label for="f_type">Tipo</label>
      <input type="text" class="form-control" name="type" value="{{$file->type}}" id="f_type" autocomplete="off" placeholder="Tipo de archivo" required>
    </div>

    <div class="form-group">
      <label for="f_extension">Extensión <small>(CUIADO DEBE COINCIDIR CON EL ARCHIVO REAL)</small></label>
      <input type="text" class="form-control" name="extension" value="{{$file->extension}}" id="f_extension" autocomplete="off" placeholder="Url individual" required>
    </div>

    <div class="form-group">
     <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

  </form>


@endsection

@section('scripts')
  var page = 'file_manager_edit'
  @parent
@endsection