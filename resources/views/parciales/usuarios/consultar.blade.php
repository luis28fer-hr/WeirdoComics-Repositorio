@extends('usuarios')
@section('contenido_usuarios')
<?php
$nomUsu = session()->get('nombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, Usuario: {$nomUsu} editado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}
@endif

@if (session()->has('actualizacion'))
{!!"<script> Swal.fire(
    'Realizado, Usuario: {$nomUsu} Actualizado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}
@endif



@if (session()->has('eliminacion'))
{!!"<script> Swal.fire(
    'Realizado, Eliminado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}
@endif





    <section class="tabla">
        <table>
            <tr class="uno">
                <th>COD</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Cargo</th>
                <th>Ingreso</th>
                <th>Opciones</th>
            </tr>
            <tr>
                @foreach($consulUsuarios as $consul)
                <tr>

                    <td>{{$consul->idUsuario}}</td>
                    <td>{{$consul->nombre}}</td>
                    <td>{{$consul->celular}}</td>
                    <td>{{$consul->email}}</td>
                    <td>{{$consul->contraseña}}</td>
                    <td>{{$consul->cargo}}</td>
                    <td>{{$consul->fechaIngreso}}</td>
                    <td>
                    <a href="{{route('usuarios.consultar.editar', $consul->idUsuario)}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>

                    <a href="#modal_eliminar-{{$consul->idUsuario}}" id="boton">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>


            @include('parciales.usuarios.modal-eliminar')
            
            
            @endforeach
        </table>
    </section>
@endsection

