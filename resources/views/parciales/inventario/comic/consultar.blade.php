
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
            <th>Proveedor</th>
            <th>Fecha</th>
            <th>Opciones</th>
        </tr>
        @foreach($consulComics as $consul)
        <tr>
            
            <td>{{$consul->idComic}}</td>
            <td>{{$consul->nombre}}</td>
            <td>{{$consul->añoEdicion}}</td>
            <td>{{$consul->compania}}</td>
            <td>{{$consul->cantidad}}</td>
            <td>{{$consul->precioCompra}}</td>
            <td>{{$consul->precioVenta}}</td>
            <td>{{$consul->proveedores->nombre}}</td>
            <td>{{$consul->fechaIngreso}}</td>
            <td>
                <a href="{{route('inventario.comic.consultar.editar',$consul->idComic)}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
        </tr>
        @endforeach
    </table>
</section>


@endsection

