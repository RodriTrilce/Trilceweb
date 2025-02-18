@extends('admin.layouts.template')
@section('content')

  <div id="modal-1" style="display:none;">
    <div class="modal-b50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Editar banner</h2>
          </div>

          <div class="col-sm-12">
            <form>
              <div class="form-group">
                <label for="txtEmail">Titulo</label>
                <input type="text" name="title" class="form-control" id="txtEmail" value="San Marcos feliz">
              </div>

              <div class="form-group">
                <label for="textLink">Link</label>
                <input type="text" name="link" class="form-control" id="textLink" value="http://www.google.com.pe/">
              </div>

              <div class="form-group">
                <label for="txtFinish">Fecha de finalización</label>
                <input type="text" class="form-control" name="finish" id="txtFinish" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
              </div>

              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="modal-new" style="display:none">
    <div class="modal-b50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <form class="" action="index.html" method="post">

              <div class="form-group">
                <label for="txtEmail">Titulo</label>
                <input type="text" name="title" class="form-control" id="txtEmail" value="San Marcos feliz">
              </div>

              <div class="form-group">
                <label for="textLink">Link</label>
                <input type="text" name="link" class="form-control" id="textLink" value="http://www.google.com.pe/">
              </div>

              <div class="form-group">
                <label for="txtFinish">Fecha de finalización</label>
                <input type="text" class="form-control" name="finish" id="txtFinish" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
              </div>

              <button type="submit" class="btn btn-primary">Enviar</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Banners</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
  @endif

<div class="saveStatus" id="saveStatus">

</div>

<div class="save-order" id="saveOrder">
  <div class="row">
    <div class="col-sm-12">
      <button type="button" class="btn btn-primary" id="saveorderButton">Guardar orden</button>
    </div>
  </div>
</div>

<div class="admin-banners" id="banners">
  @foreach ($banners as $banner)
    <div
      class="banner {{ ($banner->state == 0 ? 'banner--desactive' : '') }}"
      data-position="{{ $banner->position }}"
      data-id="{{ $banner->id }}">

      <div class="op close">
        <form action="{{action('Admin\BannersController@destroy', $banner->id)}}" method="post" onsubmit="return secureDelete(this);">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger btn-xs" type="submit">
              <span data-feather="trash"></span>
            </button>
        </form>
      </div>
      <div class="op edit">
          <a href="{{action('Admin\BannersController@edit', $banner->id)}}" class="btn btn-success">
            <span data-feather="edit"></span>
          </a>
      </div>

      @if($banner->state==0)
        <div class="info">
          <br><br>
          <h2><i>BANNER DESACTIVADO</i></h2>
        </div>
      @endif

      <div class="info expire @if(strtotime($banner->start) > time()) red @endif">

        @if($banner->state==1) <br><br> @endif

        <span class="text">Inicio: </span>
        <span class="expire-date">
          {{ Date::parse($banner->start)->format('j \d\e F \d\e\l Y \a \l\a\s G:s') }}
        </span>
      </div>

      <div class="info expire @if(strtotime($banner->expire) < time()) red @endif">
        <span class="text">Vencimiento: </span>
        <span class="expire-date">
          {{ Date::parse($banner->expire)->format('j \d\e F \d\e\l Y \a \l\a\s G:s') }}
        </span>
      </div>

      <div class="info title">
        <span class="text">Titulo:</span>
        <span class="title-text">{{ $banner->title }}</span>
      </div>

      <i>Vista previa (no se ve igual que el banner final):</i>

      <div class="info__banner">
        {!! $banner->content !!}
      </div>

    </div>
  @endforeach
</div>

<br>
<br>
<br>
<br>

@endsection

@section('scripts')
  var page = 'banners_index'
  @parent
@endsection
