@extends('admin.layouts.template')

@section('content')
<h2>Crear Usuario</h2>

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Confirmar Contraseña</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Roles</label><br>
        @foreach($roles as $role)
            <div class="form-check form-check-inline">
                <input type="checkbox" name="roles[]" value="{{ $role->id }}" class="form-check-input">
                <label class="form-check-label">{{ $role->name }}</label>
            </div>
        @endforeach
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
