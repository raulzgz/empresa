@extends("layout")
@section("main")


        <form action="{{route("productos.update", $productos->cod)}}" method="POST">
            @csrf
            @method ('PUT')
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <label for="cod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cod</label>
                    <input type="text" name="cod" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{$productos->cod}}" required />
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label for="Descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                    <input type="text" name="nombre" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{$productos->nombre}}" />
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label for="nombre_corto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre corto</label>
                    <input type="text" name="nombre_corto" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{$productos->nombre_corto}}"  required />
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label for="PVP" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
                    <input type="text" name="PVP" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{$productos->PVP}}"  required />
                </div>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label for="familia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Familia</label>
                <input type="text" name="familia" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{$productos->familia}}"  required />
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <label for="Descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                <textarea name="descripcion" id="" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$productos->descripcion}}" ></textarea>
            </div>
            <x-primary-button> Guardar </x-primary-button>
        </form>
@endsection
