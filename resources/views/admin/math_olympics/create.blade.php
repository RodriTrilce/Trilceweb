@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear olimpiada matemática</h1>
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

  <form method="post" action="/admin/math-olympics" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="create_title">Titulo</label>
      <input type="text" class="form-control" name="title" id="create_title" autocomplete="off" placeholder="Escribe aquí el titulo" required>
    </div>

    <input type="text" name="type" value="academia" hidden>

    <div class="form-group">
     <label for="create_grade">Grado</label>
     <input type="text" class="form-control" name="grade" id="create_grade" autocomplete="off" placeholder="Escribe aquí los grados" required>
    </div>

    <!--
    <div class="form-group">
      <label for="create_venue">Sede</label>
      <select class="form-control" name="venue" id="create_venue">
         <option selected hidden disabled>Selecionar sede</option>

         @foreach ($venueColegio as $venue)
           <option value="{{$venue->name}}">{{$venue->name}}</option>
         @endforeach

         @foreach ($venueAcademia as $venue)
           <option value="{{$venue->name}}">{{$venue->name}}</option>
         @endforeach
      </select>
    </div>
  -->

    <div class="form-group">
      <label for="create_venue">Sede</label>
      <input type="text" class="form-control" name="venue" id="create_venue" autocomplete="off" placeholder="Escribir la sede" required>
    </div>

    <div class="form-group">
      <label for="select_ubigeo">Ubicación</label>
      <select class="form-control" name="select_ubigeo">
        <option value="" selected >Elegir Opción </option>
        <option value="0">Lima</option> 
        <option value="1" >Provincia</option>
      </select>
    </div>

    <div class="form-group">
      <label for="create_bases">Bases</label>
      <input class="form-control-file" id="create_bases" type='file' name="base_url" accept=".pdf">
      <small class="form-text text-muted">Selecionar el archivo pdf de las bases</small>
    </div>

    <div class="form-group">
      <label for="inscription_individual_create">Inscripcion individual URL</label>
      <input type="text" class="form-control" name="inscription_url" id="inscription_individual_create" autocomplete="off" placeholder="Url individual">
    </div>

    <div class="form-group">
      <label for="inscription_group_create">Inscripcion grupal URL</label>
      <input type="text" class="form-control" name="inscription_group_url" id="inscription_group_create" autocomplete="off" placeholder="Url grupal">
    </div>

    <div class="form-group">
      <label for="create_finish">Fecha de finalización</label>
      <input type="text" class="form-control" id="mo_finish" name="finish_at" id="create_finish" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
    </div>

    <div class="form-group">
     <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

  </form>

@endsection

@section('scripts')
  var page = 'math_olympics_create'

  @parent
@endsection
