
@extends('agenda')
@section('contenido_agenda')

<?php
$nom = session()->get('txtnombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, marca: {$nom} editada correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif

<section class="tabla">
    <table>
        <tr class="uno">
            <th>COD</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th></th>
        </tr>
        <tr>
            <td>15349</td>
            <td>Colin Maldonado Ricardo</td>
            <td>10 - 05 - 2020</td>
            <td>
                <a href="{{route('agenda.marca.consultar.editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
        <td>15349</td>
            <td>Colin Maldonado Ricardo</td>
            <td>10 - 05 - 2020</td>
            <td>
                <a href="{{route('agenda.marca.consultar.editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
        <td>15349</td>
            <td>Colin Maldonado Ricardo</td>
            <td>10 - 05 - 2020</td>
            <td>
                <a href="{{route('agenda.marca.consultar.editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
        <td>15349</td>
            <td>Colin Maldonado Ricardo</td>
            <td>10 - 05 - 2020</td>
            <td>
                <a href="{{route('agenda.marca.consultar.editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
    </table>
</section>


@endsection


