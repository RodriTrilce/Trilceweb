@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar: {{$venue->name}}</h1>
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

  <form method="post" action="{{ route('venue-academia.update', $venue->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PATCH">

    <div class="form-group">
      <label for="create_name">Nombre</label>
      <input type="text" class="form-control" name="name" value="{{$venue->name}}" id="create_name" autocomplete="off" placeholder="Escribe aquí el nombre" required>
    </div>

    <div class="form-group">
      <label for="create_horary">Horario</label>
      <input type="text" class="form-control" name="horary" value="{{$venue->horary}}" id="create_horary" autocomplete="off" placeholder="Escribe aquí el horario" required>
    </div>

    <div class="form-group">
      <label for="create_direction">Dirección</label>
      <input type="text" class="form-control" name="direction" value="{{$venue->direction}}" id="create_direction" autocomplete="off" placeholder="Escribe aquí la dirección" required>
    </div>

    <div class="form-group">
      <label for="create_phone">Teléfono</label>
      <input type="text" class="form-control" name="phone" value="{{$venue->phone}}" id="create_phone" autocomplete="off" placeholder="Escribe aquí el teléfono" required>
    </div>

    <div class="form-group">
      <label for="create_longitude">Longitud</label>
      <input type="text" class="form-control" name="logitude" value="{{$venue->logitude}}" id="create_longitude" autocomplete="off" placeholder="Escribe aquí la longitud" required>
    </div>

    <div class="form-group">
      <label for="create_latitude">Latitud</label>
      <input type="text" class="form-control" name="latitude" value="{{$venue->latitude}}" id="create_latitude" autocomplete="off" placeholder="Escribe aquí la latitud" required>
    </div>

    <div class="form-group">
     <label for="create_content"><strong>Contenido</strong></label>
     <br>
     <small>
       NO TOMAR EN CUENTA EL TAMAÑO DE LOS SVG, YA QUE EL CODIGO DESPUES LO ACHICA. 
     </small>
     <textarea class="form-control"rows="4" cols="50" id="create_content" name="content">
       {{$venue->content}}
     </textarea>
    </div>

    <div class="form-group">
     <button class="btn btn-primary" type="submit">Guardar</button>
    </div>

  </form>

@endsection

@section('scripts')
  var page = 'venue_create'
  @parent
@endsection