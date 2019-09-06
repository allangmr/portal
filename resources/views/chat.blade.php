@extends('layout')

@section('title', 'Chat')

@section("contenido")

<h1> Hola </h1>
@if(@Auth::user()->hasRole('estandar'))
    <h2>Eres un estandar</h2>
@endif
@if(@Auth::user()->hasRole('supervisor'))
    <h2>Eres un supervisor</h2>
@endif
@if(@Auth::user()->hasRole('administrador'))
    <h2>Eres un administrador</h2>
@endif
@if(@Auth::user()->hasRole('master'))
    <h2>Eres un master</h2>
@endif

@endsection