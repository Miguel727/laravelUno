
@extends('layout/template')


@section('title', 'Catalogo de Productos')

@section('content')

    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CODIGO</th>
                    <th>DESCRIPCION</th>
                    <th>PRECIO</th>
                    <th>STOCK</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->codigo}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->precio}}</td>
                    <td>{{$item->existencia}}</td>
                    <td><button class="btn btn-primary">Editar</button></td>
                    <td><button class="btn btn-danger">Eliminar</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </form>
    @endsection