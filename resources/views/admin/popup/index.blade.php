@extends('admin.layouts.template')
@section('content')


  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">popups</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
  @endif

  <ul>
    @foreach($data as $popup)

    <li>{{$popup->type}} - <a href="{{action('Admin\PopupController@edit', $popup->id)}}">editar</a></li>
    
    @endforeach

  </ul>

<br>
<br>
<br>
<br>

@endsection

@section('scripts')
  var page = 'popup_index'
  @parent
@endsection
