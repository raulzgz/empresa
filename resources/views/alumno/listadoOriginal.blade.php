@extends('layout')
@section('main')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-2">ID</th>
                <th class="px-6 py-2">Nombre</th>
                <th class="px-6 py-2">Direccion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($empresas as $empresa)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-2">{{$empresa->id}}</td>
                    <td class="px-6 py-2">{{$empresa->nombre}}</td>
                    <td class="px-6 py-2">{{$empresa->direccion}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div class="relative overflow-x-auto">
        {{$empresas->links()}}
    </div>



@endsection
