@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Sedes academia</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
  @endif

<table class="table table-striped ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Lugar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $key)
      <tr>
        <th scope="row">{{$key->id}}</th>
        <td>
          <a href="{{action('Admin\VenueAcademiaController@edit', $key->id)}}">{{$key->name}}</a>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>
@endsection

@section('scripts')
  var page = 'venue_academia'
  @parent
@endsection