@extends('layouts.layoutsec')

@section('title', 'Inicio')

@section("contenido")

    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
        <div class="error mx-auto" data-text="500">500</div>
        <p class="lead text-gray-800 mb-5">No encontramos esta página</p>
        <p class="text-gray-500 mb-0">Lamentablemente esta página no aparece...</p>
        <a href="{{ route('inicio') }}">&larr; Volver al Menú Inicial</a>
        </div>

    </div>

@endsection