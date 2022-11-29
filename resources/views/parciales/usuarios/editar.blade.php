
@extends('usuarios')
@section('contenido_usuarios')

<section class="form">
    <div id = "encabezado">
         <p id="titulo">Editar Datos del empleado</p>
    </div>
    <form action="{{route('usuarios.consultar.editar.actualizar', $consulUsuarios->idUsuario)}}" method="POST">
        @csrf
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input class=" {{$errors->first('nombre')? 'invalido':''}}" name="nombre" value="{{$consulUsuarios->nombre}}" placeholder="Nombre del empleado">
                    </div>
                    <div class="input__form">
                        <p>Apellido P:</p>
                        <input class=" {{$errors->first('apellidoPaterno')? 'invalido':''}}" value="{{$consulUsuarios->apellidoP}}" name="apellidoPaterno" placeholder="Apellido Patarno del empleado">
                    </div>
                    <div class="input__form">
                        <p>Apellido M:</p>
                        <input class=" {{$errors->first('apellidoMaterno')? 'invalido':''}}" value="{{$consulUsuarios->apellidoM}}" name="apellidoMaterno" placeholder="Apellido Materno del empleado">
                    </div>
                    <div class="input__form">
                        <p>Num Cel:</p>
                        <input class=" {{$errors->first('numeroCelular')? 'invalido':''}}" value="{{$consulUsuarios->celular}}" name="numeroCelular" placeholder="Número celular del empleado">
                    </div>
                    <div class="input__form">
                        <p>Fecha ingreso:</p>
                        <input class=" {{$errors->first('fechaIngreso')? 'invalido':''}}" type="date" value="{{$consulUsuarios->fechaIngreso}}" name="fechaIngreso" title="Fecha de registro">
                    </div>
            </div>
            <div class="div2">
                    <div class="input__form">
                        <p>Correo:</p>
                        <input class="{{$errors->first('correo')? 'invalido':''}}" name="correo"  value="{{$consulUsuarios->email}}" placeholder="Correo del empleado">
                    </div>
                    <div class="input__form">
                        <p>Contraseña:</p>
                        <input class="{{$errors->first('password')? 'invalido':''}}" name="password" value="{{$consulUsuarios->contraseña}}"  type="password" placeholder="Contraseña del empleado">
                    </div>
                    <div class="input__form">
                        <p></p>
                        <input class="{{$errors->first('passwordConfirm')? 'invalido':''}}" type="password" name="passwordConfirm" value="{{$consulUsuarios->contraseña}}" placeholder="Confirmar contraseña">
                    </div>

                    <div class="input__form">
                        <p>Cargo:</p>
                        <select class="{{$errors->first('cargo')? 'invalido':''}}" name="cargo">
                            <option value="{{$consulUsuarios->cargo}}" selected>{{$consulUsuarios->cargo}}</option>
                            <option value="Empleado">Empleado</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>
            </div>
        </div>
        <div class="botones">
            <button type="reset" id="cancelar">Cancelar</button>
            <button type="submit" id="guardar">Guardar</button>
        </div>
    </form>
</section>


@endsection

