@extends('layout')
@section('main')
    <table class="table-auto">
        <caption>Listado de empresas</caption>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Direccion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($empresas as $empresa)
            <tr>
                <td>{{$empresa->id}}</td>
                <td>{{$empresa->nombre}}</td>
                <td>{{$empresa->direccion}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$empresas->links()}}
@endsection
