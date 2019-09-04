@extends('layout')

@section('title', 'Inicio')

@section("contenido")

<h1> Hola </h1>
@if(@Auth::user()->hasRole('cliente'))
    <h2>Eres un cliente</h2>
@endif

@endsection