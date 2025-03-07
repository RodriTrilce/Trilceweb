@extends('admin.layouts.template')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Popups</h1>
</div>

@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Lista de Popups</h5>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Estado</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $popup)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $popup->type }}</td>
                    <td>
                        <span class="badge {{ $popup->state ? 'badge-success' : 'badge-danger' }}">
                            {{ $popup->state ? 'Activo' : 'Inactivo' }}
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="{{ action('Admin\PopupController@edit', $popup->id) }}" class="btn btn-sm btn-warning">
                            <i class="fa fa-edit"></i> Editar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')
  var page = 'popup_index';
  @parent
@endsection