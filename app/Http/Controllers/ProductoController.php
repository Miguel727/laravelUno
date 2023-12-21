<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return view('producto.index');
    }
    public function show(string $id)
    {
        return view('producto.show', ['producto' => $id]);
    }
    public function create()
    {
        return view('productos.create');
    }
}
