@extends('.\layouts\layout')

@section('title', 'Honomedics')

@section("contenido")

        <template v-if="menu==0">
          <dashboard></dashboard>
          <h1>Contenido del Menu 0</h1>
        </template>
        <template v-if="menu==1">
          <pacientes></pacientes>
          <h1>Contenido del Menu 1</h1>
        </template>
        <template v-if="menu==2">
          <h1>Contenido del Menu 2</h1>
        </template>
        <template v-if="menu==3">
          <h1>Contenido del Menu 3</h1>
        </template>

@endsection