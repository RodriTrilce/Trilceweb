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
  <h1 class="h2">Editar popup: {{$data->type}}</h1>
</div>

<div class="admin-banners" id="banners">

  <form method="post" action="{{ route('popup.update', $data->id) }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="form-group">
       <label for="create_title">link</label>
       <input type="text" class="form-control" name="link" id="create_title" autocomplete="off" placeholder="Link" value="{{$data->link}}">
       <small class="form-text text-muted">Para que el link cierre el popup poner: #close</small>
    </div>

    <div class="form-group">
       <label for="create_image_url">Url de imagen</label>
       <input type="text" class="form-control" name="image_url" id="create_image_url" autocomplete="off" placeholder="Url" value="{{$data->image_url}}" required>
    </div>

    <div class="form-group">
       <label for="create_image_url_movil">Url de imagen movil</label>
       <input type="text" class="form-control" name="image_url_movil" id="create_image_url_movil" autocomplete="off" placeholder="Url movil" value="{{$data->image_url_movil}}" required>
    </div>
  

    <div class="form-group">
      <input type="checkbox" id="create_state" name="state" class="switch-input"
      {{ ($data->state==1?'checked':'') }}
      >
      <label for="create_state" class="switch-label">
        Visible
        <span class="toggle--on">Si</span>
        <span class="toggle--off">No</span></label>      
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
