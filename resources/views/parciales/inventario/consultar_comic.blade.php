
@extends('inventario')
@section('contenido_inventario')
<?php
$titul = session()->get('nombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, Comic: {$titul} editado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif
<section class="tabla">
    <table>
        <tr class="uno">
            <th>COD</th>
            <th>Nombre</th>
            <th>Edicion</th>
            <th>Compañia</th>
            <th>Cantidad</th>
            <th>$ Compra</th>
            <th>$ Venta</th>
            <th>Fecha</th>
            <th>Proveedor</th>
            <th>Opciones</th>
        </tr>
        <tr>
            <td>11111</td>
            <td>Batman vs Superman</td>
            <td>2015</td>
            <td>DC comics</td>
            <td>30</td>
            <td>$139</td>
            <td>$199</td>
            <td>02/02/2020</td>
            <td>%100Com</td>
            <td>
                <a href="{{route('Inventario_Comic_C_Editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
            <td>1234</td>
            <td>Batman vs Superman</td>
            <td>2015</td>
            <td>DC comics</td>
            <td>30</td>
            <td>$139</td>
            <td>$199</td>
            <td>02/02/2020</td>
            <td>%100Com</td>
            <td>
                <a href="{{route('Inventario_Comic_C_Editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
            <td>1548</td>
            <td>Batman vs Superman</td>
            <td>2015</td>
            <td>DC comics</td>
            <td>30</td>
            <td>$139</td>
            <td>$199</td>
            <td>02/02/2020</td>
            <td>%100Com</td>
            <td>
                <a href="{{route('Inventario_Comic_C_Editar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
            <td>7624</td>
            <td>Batman vs Superman</td>
            <td>2015</td>
            <td>DC comics</td>
            <td>30</td>
            <td>$139</td>
            <td>$199</td>
            <td>02/02/2020</td>
            <td>%100Com</td>
            <td>
                <a href="{{route('Inventario_Comic_C_Editar')}}">
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

