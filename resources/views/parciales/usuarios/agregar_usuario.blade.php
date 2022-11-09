
@extends('usuarios')
@section('contenido_usuarios')
<?php
$nomUsu = session()->get('nombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, Usuario: {$nomUsu} agregado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}
@endif
<section class="form">
    <div id = "encabezado">
         <p id="titulo">Datos del empleado</p>
    </div>
    <form action="{{route('UsuariosProcesar')}}" method="POST">
        @csrf
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input class=" {{$errors->first('nombre')? 'invalido':''}}" name="nombre" value="{{old('nombre')}}" placeholder="Nombre del empleado">
                    </div>
                    <div class="input__form">
                        <p>Apellido P:</p>
                        <input class=" {{$errors->first('apellidoPaterno')? 'invalido':''}}" value="{{old('apellidoPaterno')}}" name="apellidoPaterno" placeholder="Apellido Patarno del empleado">
                    </div>
                    <div class="input__form">
                        <p>Apellido M:</p>
                        <input class=" {{$errors->first('apellidoMaterno')? 'invalido':''}}" value="{{old('apellidoMaterno')}}" name="apellidoMaterno" placeholder="Apellido Materno del empleado">
                    </div>
                    <div class="input__form">
                        <p>Num Cel:</p>
                        <input class=" {{$errors->first('numeroCelular')? 'invalido':''}}" value="{{old('numeroCelular')}}" name="numeroCelular" placeholder="Número celular del empleado">
                    </div>
                    <div class="input__form">
                        <p>Fecha ingreso:</p>
                        <input class=" {{$errors->first('fechaIngreso')? 'invalido':''}}" type="date" value="{{old('fechaIngreso')}}" name="fechaIngreso" title="Fecha de registro">
                    </div>
            </div>
            <div class="div2">
                    <div class="input__form">
                        <p>Correo:</p>
                        <input class="{{$errors->first('correo')? 'invalido':''}}" name="correo"  value="{{old('correo')}}" placeholder="Correo del empleado">
                    </div>
                    <div class="input__form">
                        <p>Contraseña:</p>
                        <input class="{{$errors->first('password')? 'invalido':''}}" name="password" value="{{old('password')}}"  type="password" placeholder="Contraseña del empleado">
                    </div>
                    <div class="input__form">
                        <p></p>
                        <input class="{{$errors->first('passwordConfirm')? 'invalido':''}}" type="password" name="passwordConfirm" placeholder="Confirmar contraseña">
                    </div>

                    <div class="input__form">
                        <p>Cargo:</p>
                        <select class="{{$errors->first('cargo')? 'invalido':''}}" name="cargo">
                            <option value="0" selected disabled>Cargo del empleado</option>
                            <option value="value 1">Empleado</option>
                            <option value="value 2">Administrador</option>
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

