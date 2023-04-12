@extends("layout")
@section("main")
    <h1> estamos en la pagina de consultar </h1>
          <div class="px-4 ml-4 mt-10 mb-6 inline-flex items-center text-amber-500 text-2xl min-w-fit rounded-md border border-gray-300 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                               Edicion de {{$idioma->alumno_id}}  </div>


        <form action="{{route("idiomas.show", $idioma->id)}}" method="POST">

            @csrf
            @method ('PUT')

                 <div class="flex rounded-md shadow-sm m-4">
                             <span class="px-4 inline-flex items-center min-w-fit rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                               ID </span>
                    <input
                        type="text"
                        name="id" id=""
                        class="py-2 px-3 pr-11 text-center block border-gray-300 rounded-r-md shadow-sm text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        value="{{$idioma->alumno_id}}" disabled/>

                </div>

                <div class="flex rounded-md shadow-sm m-4">
                             <span class="px-4 inline-flex items-center min-w-fit rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                               Nombre </span>
                    <input
                        type="text"
                        name="nombre" id=""
                        class="py-2 px-3 pr-11 w-full block border-gray-300 rounded-r-md shadow-sm text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        value="{{$idioma->idioma}}" required/>

                </div>



            <br/>


            <x-cancel-button onclick="goBack()" >Cancelar</x-cancel-button>
            <x-editar-button class="ml-4 mt-0"> Guardar </x-editar-button>
        </form>
@endsection
