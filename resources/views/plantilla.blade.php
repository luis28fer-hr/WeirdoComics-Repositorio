<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Weirdo Comics | @yield('titulo', 'Weirdo Comics')</title>

    <link href="{{ URL::asset('plantilla.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('opciones.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('formulario.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('tabla.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('carrusel.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('modal.css') }}" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header>
        @include('parciales/navbar')
    </header>

    <main>
        @yield('contenido')
    </main>
    <footer>
        @include('parciales/footer')
    </footer>

</body>
</html>
