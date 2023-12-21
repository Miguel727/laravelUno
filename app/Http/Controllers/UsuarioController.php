<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return "Index usuario";
    }

    public function show($id)
    {
        $prueba = $this->prueba($id);
        return $prueba;
    }
    public function prueba($id)
    {
        return "usuario  $id";
    }
}
