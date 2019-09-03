<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index()
    {
        $name = "Allan";
        return view('index', compact('name'));
    }
    public function chat()
    {
        $name = "Allan";
        return view('chat', compact('name'));
    }
}
