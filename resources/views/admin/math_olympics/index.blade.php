@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Olimpiadas Matemáticas</h1>
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
      <th scope="col">Fecha fin</th>
      <th scope="col">Sede</th>
      <th scope="col">Titulo</th>
      <th scope="col">Grado</th>
      <th scope="col">Bases</th>
      <th scope="col">Insc. Indiv.</th>
      <th scope="col">Insc. Grupal</th>
      <th scope="col">Resultados</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $key)
      <tr>
        <th scope="row">{{$key->id}}</th>
        <td>{{$key->finish_at}}</td>
        <td>{{$key->venue}}</td>
        <td><a href="{{action('Admin\MathOlympicsController@edit', $key->id)}}">{{$key->title}}</a></td>
        <td>{!!$key->grade !!}</td>
        <td>
          @if($key->file_id)
            <a href="{{$key->getBaseRules()}}">Ver</a>
          @else
            -
          @endif
        </td>

        <td>
          @if($key->inscription_url)
            <a href="{{$key->inscription_url}}">Ver</a>
          @else
            -
          @endif
        </td>

        <td>
          @if($key->inscription_group_url)
            <a href="{{$key->inscription_group_url}}">Ver</a>
          @else
            -
          @endif
        </td>

        <td>
          @if(count($key->results) > 0)
            <select name="" id="">
            @foreach ($key->results as $k)
              <option value="">{{$k->name}}</option>
            @endforeach
          </select>
          @else
            -
          @endif
      </td>
      </tr>
    @endforeach

  </tbody>
</table>
@endsection

@section('scripts')
  var page = 'math_olympics_index'
  @parent
@endsection
