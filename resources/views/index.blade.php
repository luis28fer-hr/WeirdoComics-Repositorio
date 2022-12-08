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
                <video src="{{ URL::asset('logo2.mp4') }}" autoplay muted loop></video>
            </div>
            <div class="login">
                <form action="{{route('login.acceder')}}" method="POST">
                    @csrf
                    <H2>Inicio de sesión</H2>
                    <div>
                        <p>Usuario:</p>
                        <input type="text" name="usuario">
                        <span>{{$errors->first('usuario')}}</span>
                        <p>Contraseña:</p>
                        <input type="password" name="contraseña">
                        <span>{{$errors->first('contraseña')}}</span>
                    </div>
                    <button type="submit">Entrar</button>
                    <a href="">Olvide mi contraseña</a>
            </form>
            </div>
        </section>
    </main>


</body>
</html>
