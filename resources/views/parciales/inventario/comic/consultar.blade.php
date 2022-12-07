
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
            <th>Edicion</th>
            <th>Compañia</th>
            <th>Stock</th>
            <th>$ Compra</th>
            <th>$ Venta</th>
            <th>Proveedor</th>
            <th>Fecha</th>
            <th>Opciones</th>
        </tr>
        @foreach($consulComics as $consul)
        <tr class="@if ($consul->cantidad == 0)
                        __stockVacio
                    @endif">
            <td>{{$consul->idComic}}</td>
            <td>{{$consul->nombre}}</td>
            <td>{{$consul->añoEdicion}}</td>
            <td>{{$consul->compania}}</td>
            <td>{{$consul->cantidad}}</td>
            <td>$ {{$consul->precioCompra}}</td>
            <td>$ {{$consul->precioVenta}}</td>
            <td>{{$consul->proveedores->nombre}}</td>
            <td>{{$consul->fechaIngreso}}</td>
            <td>
                <a href="">
                    <i title="Solicitar pedido" class="fa-solid fa-envelope correo"></i>
                </a>
                <a href="{{route('inventario.comic.consultar.editar',$consul->idComic)}}">
                    <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                </a>

                <a href="#modal_eliminar-{{$consul->idComic}}" id="boton">
                    <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>

                </a>
            </td>
        </tr>

        @include('parciales.inventario.comic.modal-eliminar')

        @endforeach
    </table>
</section>


@endsection

