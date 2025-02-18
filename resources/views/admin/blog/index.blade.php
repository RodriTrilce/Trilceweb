@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h1 class="h2">Lista posts blog</h1>
  </div>

<div id="toolbar">
  <select class="form-control">
    <option value="">Exportacion basica</option>
    <option value="all">Exportar todos</option>
    <option value="selected">Exportar selección</option>
  </select>
</div>

<table
    id="my-table" 

    data-show-export="true"
    data-pagination="true"
    data-click-to-select="true"
    data-maintain-selected="true"
    data-toolbar="#toolbar"
    data-show-toggle="true"
    data-show-footer="true"
    data-toggle="true"

    data-sort-name="created_at"
    data-sort-order="desc"

    data-height="760"

   data-show-refresh="true"
   data-show-columns="true"

    data-show-pagination-switch="true"
    data-page-list="[20, 50, 100, 200, 300, All]"
    data-export-options='{
      "fileName": "lista_blog_{{date("Y-m-d")}}",
      "ignoreColumn": ["state", "op"]
    }'
    >
  <thead>
    <tr>
      <th data-field="state" data-checkbox="true"></th>
      <th data-field="created_at" data-sortable="true">Fecha creacíón</th>
      <th data-field="site" data-sortable="true">Blog</th>
      <th data-field="title" data-sortable="true">Titulo</th>
      <th data-field="marker" data-sortable="true">Marcado?</th>
      <th data-field="visible" data-sortable="true">Visible?</th>
      <th data-field="approved" data-sortable="true">Aprobado?</th>
      <th data-field="op" >Operaciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($data as $post)
      <tr>
        <td></td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->site}}</td>
        <td><a href="{{action('Admin\BlogController@edit', $post->id)}}">{{$post->title}}</a></td>
        <td>{{ ($post->marker == '1' ? 'Si' : 'No') }}</td>
        <td>{{ ($post->visible == '1' ? 'Si' : 'No') }}</td>
        <td>{{ ($post->approved == '1' ? 'Si' : 'No') }}</td>
        <td><a href="/{{$post->site}}/blog/{{$post->slug}}" target="_blank">Ver</a></td>
      </tr>
    @endforeach
  </tbody>
</table>


@endsection

@section('scripts')
  var page = 'blog_index'
  @parent
@endsection
