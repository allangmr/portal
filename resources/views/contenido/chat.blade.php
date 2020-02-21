@extends('layouts.layout')

@section('title', 'Chat')

@section("contenido")

<h1> Hola </h1>
@if(@Auth::user()->hasRole('cliente'))
    <h2>Eres un estandar</h2>
@endif
@if(@Auth::user()->hasRole('administrador'))
    <h2>Eres un supervisor</h2>
@endif

@endsection