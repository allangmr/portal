<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index()
    {
        $name = "Allan";
        return view('contenido.index', compact('name'));
    }
    public function chat()
    {
        $name = "Allan";
        return view('contenido.chat', compact('name'));
    }
    public function solicitar()
    {
        return view('contenido.solicitar');
    }
}
