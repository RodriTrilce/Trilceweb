@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Subir archivos</h1>
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

  <form
    method="post"
    action="/admin/filemanager"
    enctype="multipart/form-data"
    id="dropZoneForm"
    >
    {{ csrf_field() }}

    <div class="form-group">
      <div class="fallback">
        <input type="file" name="file" multiple>
      </div>
    </div>
    
    <div class="dropzone-previews">
    </div>

  </form>
    <div id="fileTemplate" class="dz-preview dz-file-preview" style="display: none;">
      <div class="dz-details">
        <div class="row col-xs-12">
          <div class="col-xs-12 col-sm-2">
            <img data-dz-thumbnail />            
          </div>
          <div class="col-xs-12 col-sm">
            <div class="dz-filename">Nombre: <span data-dz-name></span></div>
            <div class="dz-size">Peso: <strong data-dz-size></strong></div>
          </div>
          <br>
          <div class="col-xs-12 col-sm-12 col-lg-12 dropzone__fileurl">
            <div class="form-group">
              <label for="url_estatico">URL USO INTERNO:</label>
              <textarea onclick="this.focus();this.select()" readonly="readonly" type="text" id="url_estatico" class="form-control" autocomplete="off" data-dz-url>
              </textarea>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-lg-12 dropzone__fileurl">
            <div class="form-group">
              <label for="url_cute">URL DESCARGAR:</label>
              <textarea onclick="this.focus();this.select()" readonly="readonly" type="text" id="url_cute" class="form-control" autocomplete="off" data-dz-urlcute>
              </textarea>
            </div>
          </div>
        </div>

      </div>
      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
      <div class="dz-success-mark"><span>✔</span></div>
      <div class="dz-error-mark"><span>✘</span></div>
      <div class="dz-error-message"><span data-dz-errormessage></span></div>
    </div>


  <br>

@endsection

@section('scripts')
  var page = 'file_manager_create'

  @parent
@endsection
