@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar: {{$post->title}}</h1>
  </div>

@if (Session::has('success'))
	<div class="alert alert-success" role="alert">
		{{Session::get('success')}}</h3>
	</div>
@endif

@if (Session::has('error'))
  <div class="alert alert-danger" role="alert">
    {{Session::get('error')}}</h3>
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

  <form method="post" action="{{ route('blog.update', $post->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="form-group">
       <label for="create_title">Titulo</label>
       <input type="text" class="form-control" name="title" id="create_title" autocomplete="off" placeholder="Escribe aquí el titulo" value="{{ $post->title }}" required>
    </div>

    <div class="form-group">
      <input type="checkbox" id="create_marker" name="marker" class="switch-input"
      {{ ($post->marker==1?'checked':'') }}
      >
      <label for="create_marker" class="switch-label">
        Marcado (fijo):
        <span class="toggle--on">Si</span>
        <span class="toggle--off">No</span></label>      
    </div>

    <div class="form-group">
      <input type="checkbox" id="create_draft" name="visible" class="switch-input"
      {{ ($post->visible==1?'checked':'') }}
      >
      <label for="create_draft" class="switch-label">
        Visible:
        <span class="toggle--on">Si</span>
        <span class="toggle--off">No</span></label>      
    </div>

    @if(Auth::user()->hasRole('admin'))
      <div class="form-group">
        <input type="checkbox" id="create_approved" name="approved" class="switch-input"
        {{ ($post->approved==1?'checked':'') }}
        >
        <label for="create_approved" class="switch-label">
          Aprobado:
          <span class="toggle--on">Si</span>
          <span class="toggle--off">No</span></label>      
      </div>
    @endif

     <div class="form-group">
       <label for="create_site">Sección</label>
       <select class="form-control" name="site" id="create_site" required>
         <option hidden disabled>Selecionar sitio</option>
         <option {{ ($post->site=='academia'?'selected':'') }} value="academia">Academia</option>
         <option {{ ($post->site=='colegio'?'selected':'') }} value="colegio">Colegio</option>
       </select>
     </div>

     <div class="form-group">
       <textarea class="form-control" id="create_content" name="content" rows="3">
       	{!! $post->content !!}
       </textarea>
     </div>


	<!--
     <div class="form-group">
       <label for="create_finish">Fecha</label>
       <input type="text" class="form-control" id="mo_finish" name="created_at" id="create_finish" value="<?php echo date("Y-m-d H:i:s"); ?>" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
     </div>
 	-->

	<div class="form-group">
		<button class="btn btn-primary" type="submit">Enviar</button>
	</div>
  </form>

  <hr>
  <h3>Imagenes del post</h3>

<style>
  
  .X{
    padding: 5px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .X:hover .img-delete{
    visibility: visible;
  }

  .X img{
    border:1px solid #ccc;
    transition: all .1s ease-in-out;
  }

  .X img.principal{
    position: relative;
    margin:3px;
  }

  .X img.principal::before{
    display: block;
    content: "PRINCIPAL";
    background: blue;
    position: absolute;
    top: 0;
    left: 0;
    width: 40px;
    height: 20px;
  }

  .X img:hover{
    border: 1px dashed blue;
    padding: 3px;

  }

  .imss{
    margin-left: 0;
  }

  .img-delete{
    visibility: hidden;
    position: absolute;
    top: 0;
    right: 0;
    width: 20px;
    height: 20px;
    background: red;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .img-btn-op{
    display: inline-block;
    margin: 5px;
  }

</style>
    <div class="row imss">
      <div class="row col-xs-12 col-md-12">
        @foreach ($post->blogGallery->images as $image)
          <div class="row col-xs-12 col-sm-6 col-md X">
  
            <div class="col-xs-12 col-sm-12 col-md-12">
              @if($image->id == $post->file_id)
                <h3>Principal</h3>
              @endif
              <a href="{{$image->blogImage()}}" target="_blank">
                <img src="{{$image->blogImage(true)}}" class="{{ ($image->id == $post->file_id ? 'principal' : '') }}" width="200px" height="200px" alt="">
              </a>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <form class="img-btn-op" action="{{action('Admin\FileManagerController@destroy', $image->id)}}" method="post" onsubmit="return secureDelete(this);">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <input name="_filesable" type="hidden" value="blog">
              <input name="post_id" type="hidden" value="{{$post->id}}">
                <button class="btn btn-secondary btn-undefined" title="Eliminar" type="submit">
                  <i class="fa fa-trash"></i>
                </button>
              </form>

              <form class="img-btn-op" action="{{action('Admin\FileManagerController@destroy', $image->id)}}" method="post"">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <input name="_filesable" type="hidden" value="blog-hacer-principal">
              <input name="post_id" type="hidden" value="{{$post->id}}">
                <button class="btn btn-secondary btn-undefined" title="Convertir en principal" type="submit">
                  <i class="fa fa-star"></i>
                </button>
              </form>

            </div>


          </div>
        @endforeach
      </div>
    </div>

  <br>
  <br>
  <br>
@endsection

@section('scripts')
  var page = 'blog_create'
  @parent
@endsection
 