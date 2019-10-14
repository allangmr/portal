<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function __construct()
    {
        $this->middleware('preventBackHistory');
        $this->middleware('auth');
    }
    public function index()
    {
        return view('contenido.index');
    }
    public function chat()
    {
        return view('contenido.chat');
    }
    public function solicitar()
    {
        return view('contenido.solicitar');
    }
}
