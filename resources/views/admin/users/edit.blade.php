@extends('admin.layouts.template')

@section('content')
<h2>Editar Usuario</h2>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nueva Contraseña (opcional)</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <label>Confirmar Contraseña</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <div class="form-group">
        <label>Roles</label><br>
        @foreach($roles as $role)
            <div class="form-check form-check-inline">
                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                       class="form-check-input"
                       {{ $user->roles->contains($role->id) ? 'checked' : '' }}>
                <label class="form-check-label">{{ $role->name }}</label>
            </div>
        @endforeach
    </div>

    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
