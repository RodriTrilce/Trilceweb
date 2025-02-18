@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar</h1>
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

  <form method="post" action="{{ route('math-olympics.update',$olympic->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PATCH">
    <input name="state_base" id="base_url_counter" type="hidden" value="0">

    <div class="form-group">
      <label for="create_title">Titulo</label>
      <input type="text" class="form-control" name="title" value="{{$olympic->title}}" id="create_title" autocomplete="off" placeholder="Escribe aquí el titulo" required>
    </div>

    <input type="text" name="type" value="academia" hidden>

    <div class="form-group">
     <label for="create_grade">Grado</label>
     <input type="text" class="form-control" name="grade" value="{{$olympic->grade}}" id="create_grade" autocomplete="off" placeholder="Escribe aquí los grados" required>
    </div>

    <div class="form-group">
      <label for="create_venue">Sede</label>
      <input type="text" class="form-control" name="venue" value="{{$olympic->venue}}" id="create_venue" autocomplete="off" placeholder="Escribir la sede" required>
    </div>


    <div class="form-group">
      <label for="create_venue">Ubicación</label>
      <input type="text" class="form-control" name="isprovince" value="{{$olympic->isprovince}}" id="create_isprovince" autocomplete="off" placeholder="Escribir 1 si es provicia" >
    </div>



    

    <div class="form-group">
      <label for="create_bases">Bases</label><br>
      @if($olympic->file_id)
        <div class="row col" id="math_olympics_bases_div">
          <a href="{{$olympic->getBaseRules()}}" target="_blank" class="btn btn-info">VER PDF</a>
        </div>-
        <a href="javascript:void(0);" id="math_olympics_bases_remove">Eliminar PDF</a>
      @else
        <input class="form-control-file" id="create_bases" type='file' name="base_url" accept=".pdf">
        <small class="form-text text-muted">Selecionar el archivo pdf de las bases</small>
      @endif
      <br>
    </div>

    <div class="form-group">
      <label for="inscription_individual_create">Inscripcion individual URL</label>
      <input type="text" class="form-control" name="inscription_url" value="{{$olympic->inscription_url}}" id="inscription_individual_create" autocomplete="off" placeholder="Url individual">
    </div>

    <div class="form-group">
      <label for="inscription_group_create">Inscripcion grupal URL</label>
      <input type="text" class="form-control" name="inscription_group_url" value="{{$olympic->inscription_group_url}}" id="inscription_group_create" autocomplete="off" placeholder="Url grupal">
    </div>

    <div class="form-group">
      <label for="create_finish">Fecha de finalización</label>
      <input type="text" class="form-control" id="mo_finish" name="finish_at" value="{{$olympic->finish_at}}" id="create_finish" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
    </div>

    <div class="form-group">
     <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

  </form>

  <hr>

  <h3>Resultados</h3>

  <div class="row results-tables">
      @foreach ($olympic->results as $result)
        <div class="row col-12">
          <div class="col-6">{{$result->name}}</div>
          <div class="col-6">
            <form action="{{action('Admin\MathOlympicsResultsController@destroy', $result->id)}}" method="post" onsubmit="return secureDelete(this);">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <input type="hidden" name="matholympic_id" value="{{$olympic->id}}">
              <input type="hidden" name="result_id" value="{{$result->id}}">
              <div class="col-6"><button class="btn btn-link" type="submit">✖ Eliminar</button></div>
            </form>
          </div>
        </div>
      @endforeach
      @if(count($olympic->results) < 1)
        No hay resultados
      @endif
  </div>

  <form action="{{action('Admin\MathOlympicsResultsController@store')}}" method="post" id="result_save_form" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="matholympic_id" value="{{$olympic->id}}">
    <div class="row results-tables" id="results_content">
    </div>
  </form>

<div class="row col-6">

  <div class="col-6">
    <div class="form-group">
     <button class="btn btn-link" id="result_newresult" type="button">Nuevo resultado</button>
    </div>
  </div>

  <div class="col-6">
    <div class="form-group">
     <button class="btn btn-link" id="result_save" type="submit">Guardar</button>
    </div>
  </div>

</div>

<div class="row">
  <div class="col text-right">
    <form action="{{action('Admin\MathOlympicsController@destroy', $olympic->id)}}" method="post" onsubmit="return secureDelete(this);">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="DELETE">
      <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
    </form>
  </div>
</div><br>

@endsection

@section('scripts')
  var page = 'math_olympics_edit'
  @parent
@endsection
