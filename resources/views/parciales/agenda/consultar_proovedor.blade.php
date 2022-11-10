
@extends('agenda')
@section('contenido_agenda')
<?php
$nompro = session()->get('txtproovedor')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, proveedor: {$nompro} editado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif
<section class="tabla">
    <table>
        <tr class="uno">
            <th>Nombre</th>
            <th>Municipio ID</th>
            <th>Contacto</th>
            <th>Numero Fijo</th>
            <th>Numero Celular</th>
            <th>Correo</th>
            <th></th>
        </tr>
        <tr>
            <td>Villegas Vazquez Arturo</td>
            <td>123</td>
            <td>*****</td>
            <td>4422101616</td>
            <td>4421336089</td>
            <td>artur@gmail.com</td>
            <td>
                <a href="{{route('Agenda_Proovedor_Consultar_Editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
            <td>Villegas Vazquez Arturo</td>
            <td>123</td>
            <td>*****</td>
            <td>4422101616</td>
            <td>4421336089</td>
            <td>artur@gmail.com</td>
            <td>
                <a href="{{route('Agenda_Proovedor_Consultar_Editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
            <td>Villegas Vazquez Arturo</td>
            <td>123</td>
            <td>*****</td>
            <td>4422101616</td>
            <td>4421336089</td>
            <td>artur@gmail.com</td>
            <td>
                <a href="{{route('Agenda_Proovedor_Consultar_Editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
            <td>Villegas Vazquez Arturo</td>
            <td>123</td>
            <td>*****</td>
            <td>4422101616</td>
            <td>4421336089</td>
            <td>artur@gmail.com</td>
            <td>
                <a href="{{route('Agenda_Proovedor_Consultar_Editar')}}">
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


