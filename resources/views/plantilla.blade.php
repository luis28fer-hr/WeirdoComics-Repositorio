<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weirdo Comics | @yield('titulo', 'Weirdo Comics')</title>
    <link rel="stylesheet" href="/css/plantilla.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @include('styles/style_plantilla')
    @include('styles/style_usuarios')
    @include('styles/style_usuarios_formulario')
    @include('styles/style_usuarios_tabla')
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
