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

  <form method="post" action="{{ route('venue-colegio.update', $venue->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PATCH">
    <input name="state_base" id="base_url_counter" type="hidden" value="0">
{{--
    <div class="form-group">
      <label for="create_title">Titulo</label>
      <input type="text" class="form-control" name="title" value="{{$olympic->title}}" id="create_title" autocomplete="off" placeholder="Escribe aquí el titulo" required>
    </div> --}}

    <div class="form-group">
      <label for="create_content"><strong>Niveles, direcciones y telefonos</strong></label><br><br>

      @foreach ($directions as $direction)
        <input type="text" name="direcciones[{{$direction->id}}][id]" value="{{$direction->id}}" hidden>
        <input type="text" name="direcciones[{{$direction->id}}][grades]" value="{{$direction->grades}}" placeholder="Grados">
        <input type="text" name="direcciones[{{$direction->id}}][address]" value="{{$direction->address}}" placeholder="Dirección">
        <input type="text" name="direcciones[{{$direction->id}}][phone]" value="{{$direction->phone}}" placeholder="Teléfonos">
        <hr>        
        @endforeach
    </div>

    <div class="form-group">
      <label for="create_content"><strong>Inversion</strong></label><br><br>

      @foreach ($investments as $investment)
        <input type="text" name="inversiones[{{$investment->id}}][id]" value="{{$investment->id}}" hidden>
        <input type="text" name="inversiones[{{$investment->id}}][range]" value="{{$investment->range}}" placeholder="Rango">
        <input type="text" name="inversiones[{{$investment->id}}][admissionfee]" value="{{$investment->admissionfee}}" placeholder="Cuota admisión">
        <input type="text" name="inversiones[{{$investment->id}}][enrollment]" value="{{$investment->enrollment}}" placeholder="Cuota matrícula">
        <input type="text" name="inversiones[{{$investment->id}}][monthlypayment]" value="{{$investment->monthlypayment}}" placeholder="Cuota mensual">
        <hr>        
        @endforeach
    </div>

    <div class="form-group">
     <label for="create_content"><strong>Horarios</strong></label>
     <textarea class="form-control"rows="4" cols="50" id="create_content" name="content">
       {{$venue->content}}
     </textarea>
    </div>

    <div class="form-group">
     <button class="btn btn-primary" type="submit">Guardar</button>
    </div>

  </form>

{{-- <div class="row">
  <div class="col text-right">
    <form action="{{action('Admin\MathOlympicsController@destroy', $olympic->id)}}" method="post" onsubmit="return secureDelete(this);">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="DELETE">
      <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
    </form>
  </div>
</div> --}}

@endsection

@section('scripts')
  var page = 'venue_create'
  @parent
@endsection
