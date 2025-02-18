@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar: {{$solution->display}}</h1>
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

  <form method="post" action="{{ route('solutions.update', $solution->id) }}" enctype="multipart/form-data">
    <input name="_method" type="hidden" value="PATCH">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="f_display">Año / Tipo</label>
      <input type="text" class="form-control" name="display" value="{{$solution->display}}" id="f_display" autocomplete="off" placeholder="Escribe el año" required>
    </div>

    <div class="form-group">
      <label for="create_finish">Fecha del simulacro<br>
        <small>IMPORTANTE: Poner la fecha aproximada del examen, ya que se lista en la web segun esta fecha</small>
      </label>

      <input type="text" value="{{$solution->created_at}}" class="form-control" id="mo_finish" name="created_at" id="create_finish" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
    </div>

    <div class="form-group">
      <label for="f_university">Universidad</label>
      <select class="form-control" name="university_id" id="f_university" required>
        <option selected hidden disabled>Selecionar Univerisad</option>
        <option value="1" {{ ($solution->university_id == '1' ? 'selected' : '') }}>UNI</option>
        <option value="2" {{ ($solution->university_id == '2' ? 'selected' : '') }}>San Marcos</option>
        <option value="3" {{ ($solution->university_id == '3' ? 'selected' : '') }}>Católica</option>
      </select>
    </div>    

    <div class="form-group">
      <label for="f_exm_1">Examen 1: </label>
      <input type="text" class="form-control" name="exm_1" value="{{$solution->exm_1}}" id="f_exm_1" autocomplete="off" placeholder="Escribe el examen">
    </div>

    <div class="form-group">
      <label for="f_exm_2">Examen 2: </label>
      <input type="text" class="form-control" name="exm_2" value="{{$solution->exm_2}}" id="f_exm_2" autocomplete="off" placeholder="Escribe el examen">
    </div>
	
	@if($solution->university_id == '2' )
      <div class="form-group" id="solution_f_exm3">
        <label for="f_exm_3">Examen 3: </label>
        <input type="text" class="form-control" name="exm_3" value="{{$solution->exm_3}}" id="f_exm_3" autocomplete="off" placeholder="Escribe el examen">
      </div>
	  
	  <div class="form-group" id="solution_f_exm3">
        <label for="f_exm_4">Examen 4: </label>
        <input type="text" class="form-control" name="exm_4" value="{{$solution->exm_4}}" id="f_exm_4" autocomplete="off" placeholder="Escribe el examen">
      </div>
    @endif
	
    @if($solution->university_id == '1' || $solution->university_id == '3' )
      <div class="form-group" id="solution_f_exm3">
        <label for="f_exm_3">Examen 3: </label>
        <input type="text" class="form-control" name="exm_3" value="{{$solution->exm_3}}" id="f_exm_3" autocomplete="off" placeholder="Escribe el examen">
      </div>
    @endif


    <div class="form-group">
     <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

  </form>


@endsection

@section('scripts')
  var page = 'solution_create'
  @parent
@endsection