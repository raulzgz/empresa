<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica Empresas Certificado</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>
<body>
<div id="app">
<header class="bg-header h-10vh flex flex-row justify-between items-center p-2">
    <img class="max-h-full" src="{{asset("images/logo1.png")}}" alt="logo">
    <h1 class="max-h-full text-4xl text-white">Gestion de Empresas</h1>
    <div>
        @auth
            <div class="pt-8 text-end pr-6 text-black">
                Bienvenido
                <span class="text-white capitalize"> {{auth()->user()->name}} </span>
            </div>
            <div class="pt-2 pr-4 text-end">
            <form action="logout" method="POST">
                @csrf
                <x-login-button> SALIR </x-login-button>
            </form>
        </div>
        @endauth

        @guest
            <form action="login" method="POST">
                @csrf
                <div class="pt-8">
                    <input type="email" name="email" placeholder="email" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    <input type="password" name="password" placeholder="password" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="p-2 text-end">
                    <x-login-button> ENTRAR </x-login-button>
                    <x-login-button><a href="{{route('register')}}">Registrarse</a></x-login-button>
                </div>
            </form>
        @endguest
    </div>

</header>

<nav class="h-5vh bg-nav p-2 dark:bg-gray-900 dark:border-gray-700">
         <div class="container flex flex-wrap items-center justify-between mx-auto">
            <ul class="flex ">
                <li class="-mb-px mr-1">
                    <a class="bg-white inline-block rounded-t py-2 px-4 text-blue-700 font-semibold" href="/main">Inicio</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block rounded-t py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="/empresas">Empresas</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block rounded-t py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="/alumnos">Alumnos</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block rounded-t py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="/idiomas">Idiomas</a>
                </li>
<!--                <li class="mr-1">
                    <a class="bg-white inline-block rounded-t py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="/productos">Productos</a>
                </li>-->
            </ul>
        </div>
</nav>


<main class="h-75vh p-4 bg-main">
    @yield("main")


</main>

<footer class="h-10vh bg-footer p-4 hover:rounded-t-lg" >
    <p>@copyright Raul Navarro Sos - Desarrollo de aplicaciones con tecnologías web </p>

</footer>
</div>
</body>

</html>
