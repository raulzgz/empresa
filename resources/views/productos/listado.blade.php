@extends('layout')
@section('main')
    <div class="flex justify-around content-end object-right">
        <x-secondary-button><a href="{{route("productos.create")}}"> Crear producto </a></x-secondary-button>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-2">COD</th>
                <th class="px-6 py-2">Nombre</th>
                <th class="px-6 py-2">Nombre corto</th>
                <th class="px-6 py-2">Precio</th>
                <th class="px-6 py-2">Familia</th>
                <th class="px-6 py-2">Editar</th>
                <th class="px-6 py-2">Borrar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-2">{{$producto->cod}}</td>
                    <td class="px-6 py-2">{{$producto->nombre}}</td>
                    <td class="px-6 py-2">{{$producto->nombre_corto}}</td>
                    <td class="px-6 py-2">{{$producto->PVP}}</td>
                    <td class="px-6 py-2">{{$producto->familia}}</td>

                    <td class="px-6 py-2">
                        <x-edit-button> <a href="{{route('productos.edit',$producto->cod)}}"> Editar </a> </x-edit-button>
                    </td>

                    <td class="px-6 py-2">
                    <form action="{{route('productos.destroy',$producto->cod)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <x-delete-button> Borrar </x-delete-button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>

    <div class="relative overflow-x-auto">
        {{$productos->links()}}
    </div>
@endsection
