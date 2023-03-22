<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresas</title>
    @vite('resources/css/app.css')
</head>
<body>

<header class="bg-header h-15v flex flex-row justify-between items-center p-4 hover:rounded-b-lg">
    <img class="max-h-full" src="{{asset("images/logo1.png")}}" alt="logo">
    <h1 class="max-h-full text-5xl text-white">Gestion de Empresas</h1>
    <div>
        <form action="login" method="POST">
            @csrf
            <div class="p-1">
                <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="p-1 text-end">
                <x-login-button>Login</x-login-button>
                <x-login-button><a href="{{route('register')}}">Registrarse</a></x-login-button>
            </div>
        </form>
    </div>

</header>

<nav class="h-10v bg-nav p-2 hover:rounded-b-lg">
    <h1> menu  de navegación dependará de cada página, inyectar un yield</h1>

</nav>

<main class="h-65v p-4 bg-main">
    @yield("main")

</main>

<footer class="h-10v bg-footer p-4 hover:rounded-t-lg" >
    <h1>footer  fijo @copyright contacto y podrímos aportar redes sociales</h1>

</footer>


</body>
</html>
