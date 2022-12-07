
@extends('inventario')
@section('contenido_inventario')
<?php
$nomArt = session()->get('txtnombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, Articulo: {$nomArt} editado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif
<section class="tabla">
    <table>
        <tr class="uno">
            <th>COD</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Stock</th>
            <th>$ Compra</th>
            <th>$ Venta</th>
            <th>$ Proveedor</th>
            <th>Fecha</th>
            <th>Opciones</th>
        </tr>
        @foreach($consulArticulos as $consul)
        <tr class="@if ($consul->cantidad == 0)
                    __stockVacio
                    @endif">

            <td>{{$consul->idArticulo}}</td>
            <td>{{$consul->nombre}}</td>
            <td>{{$consul->tipo}}</td>
            <td>{{$consul->marca->nombre}}</td>
            <td>{{$consul->cantidad}}</td>
            <td>$ {{$consul->precioCompra}}</td>
            <td>$ {{$consul->precioVenta}}</td>
            <td>{{$consul->proveedores->nombre}}</td>
            <td>{{$consul->fechaIngreso}}</td>
            <td>
                <a href="">
                    <i title="Solicitar pedido" class="fa-solid fa-envelope correo"></i>
                </a>
                <a href="{{route('inventario.articulo.consultar.editar',$consul->idArticulo)}}">
                    <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                </a>
                <a href="#modal_eliminar-{{$consul->idArticulo}}" id="boton">
                    <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                </a>
            </td>
        </tr>

        @include('parciales.inventario.articulo.modal-eliminar')

        @endforeach

    </table>
</section>


@endsection

