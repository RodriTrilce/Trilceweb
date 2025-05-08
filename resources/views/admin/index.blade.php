@extends('admin.layouts.template')

@section('content')
<div class="container-fluid py-4">
    {{-- Saludo personalizado --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="bg-gradient-primary text-black  p-4 rounded shadow-sm d-flex align-items-center justify-content-between">
                <div>
                    <h3 class="mb-1">Hola, {{ Auth::user()->name }} 👋</h3>
                    <p class="mb-0">Bienvenido al panel de administración de <strong>TRILCE</strong>. Aquí podrás gestionar toda la web institucional.</p>
                </div>
                <span data-feather="smile" class="feather-32"></span>
            </div>
        </div>
    </div>

    {{-- Secciones del panel --}}
    <div class="row g-4">
        @php
            $cards = [
                [
                    'title' => 'Formularios',
                    'text' => 'Administra formularios activos para colegios y academias.',
                    'icon' => 'file-text',
                    'color' => 'primary',
                    'link' => '/admin/form-sorteo',
                    'btn' => 'Ver formularios',
                ],
                [
                    'title' => 'Simulacros',
                    'text' => 'Crea y administra simulacros por universidad.',
                    'icon' => 'edit-3',
                    'color' => 'success',
                    'link' => '/admin/simulacrum/create',
                    'btn' => 'Nuevo simulacro',
                ],
                [
                    'title' => 'Banners',
                    'text' => 'Gestiona los banners para páginas principales.',
                    'icon' => 'image',
                    'color' => 'warning',
                    'link' => '/admin/banners/create',
                    'btn' => 'Nuevo banner',
                ],
                [
                    'title' => 'Blog',
                    'text' => 'Publica artículos o noticias académicas.',
                    'icon' => 'book-open',
                    'color' => 'info',
                    'link' => '/admin/blog',
                    'btn' => 'Ir al blog',
                ],
                [
                    'title' => 'Shortlinks',
                    'text' => 'Crea enlaces cortos para campañas internas.',
                    'icon' => 'link',
                    'color' => 'dark',
                    'link' => '/admin/shortlink',
                    'btn' => 'Ver enlaces',
                ],
                [
                    'title' => 'Gestor de Archivos',
                    'text' => 'Sube y organiza archivos en el sistema.',
                    'icon' => 'folder',
                    'color' => 'secondary',
                    'link' => '/admin/filemanager',
                    'btn' => 'Administrar archivos',
                ],
            ];
        @endphp

        @foreach ($cards as $card)
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm border-top border-4 border-{{ $card['color'] }} h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-{{ $card['color'] }}">{{ $card['title'] }}</h5>
                            <span data-feather="{{ $card['icon'] }}" class="text-{{ $card['color'] }}"></span>
                        </div>
                        <p class="card-text mt-2">{{ $card['text'] }}</p>
                    </div>
                    <a href="{{ $card['link'] }}" class="btn btn-outline-{{ $card['color'] }} btn-sm w-100">{{ $card['btn'] }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
