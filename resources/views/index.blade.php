<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion | Weirdo Comics</title>
    <link href="{{ URL::asset('index.css') }}" rel="stylesheet"/>
</head>
<body>
    <main>
        <section id="contenedor">
            <div class="presentacion">
                <video src="{{ URL::asset('logo5.mp4') }}" autoplay muted loop></video>
            </div>
            <div class="login">
                <form action="{{route('Inicio')}}">
                    <H2>Inicio de sesión</H2>
                    <div>
                        <p>Usuario:</p>
                        <input type="text">
                        <p>Contraseña:</p>
                        <input type="text">
                    </div>
                    <button type="submit">Entrar</button>
                    <a href="">Olvide mi contraseña</a>
            </form>
            </div>
        </section>
    </main>


</body>
</html>
