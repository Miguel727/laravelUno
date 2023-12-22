<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        $productos= DB::select('SELECT * FROM productos where activo=1');
        return view('productos.index', ['productos'=>$productos]);
    }
    public function show($nombre)
    {
        return view('productos.show', ['producto' => $nombre]);
    }
    public function create()
    {
        return view('productos.create');
    }
    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());
        echo $request->method();
        echo $request->input('nombre');
        echo"</pre>";
    }
     public function edit($id)
    {
       return view('productos.edit',['id'=>$id]);
    }
    public function update(Request $request, $id)
    {
        echo"<pre>";
        print_r($request->all());
        // echo $request->method();
        // echo $request->input('nombre');
        echo"</pre>";
    }
    public function destroy( $id)
    {
        echo"<pre>";
        echo "Id eliminado {$id}";
        echo"</pre>";
    }
}
