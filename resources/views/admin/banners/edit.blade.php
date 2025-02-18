@extends('admin.layouts.template')
@section('content')

<br>
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

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar banner</h1>
</div>

<div class="admin-banners" id="banners">

  <form method="post" action="{{ route('banners.update', $banner->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="form-group">
       <label for="create_title">Titulo</label>
       <input type="text" class="form-control" name="title" id="create_title" autocomplete="off" placeholder="Escribe aquí el titulo" value="{{$banner->title}}" required>
    </div>

    <div class="form-group">
      <input type="checkbox" id="create_state" name="state" class="switch-input"
      {{ ($banner->state==1?'checked':'') }}
      >
      <label for="create_state" class="switch-label">
        Visible
        <span class="toggle--on">Si</span>
        <span class="toggle--off">No</span></label>      
    </div>

     <div class="form-group">
       <label for="create_section">Sección</label>
       <select class="form-control" name="type" id="create_section" required>
         <option {{ ($banner->type == 'index_academia' ? 'selected':'') }} value="index_academia">Academia</option>
         <option {{ ($banner->type == 'index_colegio' ? 'selected':'') }} value="index_colegio">Colegio</option>
       </select>
     </div>

     <div class="form-group">
       <label for="create_content">contenido</label>
       <textarea name="content" id="create_content" cols="30" rows="10" class="form-control">
         {!! $banner->content !!}
       </textarea>
     </div>  

     <div class="form-group">
       <label for="create_finish">Inicio </label>
       <input type="text" class="form-control" id="mo_start" name="start" value="{{$banner->start}}" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
     </div>

     <div class="form-group">
       <label for="mo_finish">Fin</label>
       <input type="text" class="form-control" id="mo_finish" name="expire" value="{{$banner->expire}}" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
     </div>

     <div class="form-group">
       <button class="btn btn-primary" type="submit">Guardar</button>
     </div>

  </form>

</div>


@endsection

@section('scripts')
  var page = 'banners_create'
  @parent
@endsection
