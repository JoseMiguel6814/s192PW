<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>@yield('titulo')</title>
</head>
<body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('formulario')?'text-warning':''}}" aria-current="page" href="{{ route('formulario') }}">Registro Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('clientes')?'text-warning':''}}" href="{{ route('clientes') }}">Consulta Clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('contenido')

</body>
</html>