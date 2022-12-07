@extends('ventas')
@section('contenido_ventas')

<?php
$codArt = session()->get('txtCodProducto')
?>


@if (session()->has('actualizacion'))
{!!"<script> Swal.fire(
    'Realizado, Actualizacion de venta: {$codArt} editada correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif

@if (session()->has('eliminacion'))
{!!"<script> Swal.fire(
    'Realizado, Eliminacion de venta: Correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif

@if (session()->has('noprocede'))
{!!"<script> Swal.fire(
    'Lo siento, El stock de: {$codArt} es insuficiente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif

<section class="tabla">
    <table>
        <tr class="uno">
            <th>REF</th>
            <th>Usuario</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>fecha</th>
            <th>Opciones</th>
        </tr>
        @foreach ($consultaVentas as $item)
            <tr>
                <td>{{$item->idVenta}}</td>
                <td>{{$item->usuario->nombre}} {{$item->usuario->apellidoP}} {{$item->usuario->apellidoM}}</td>
                <td>
                    @if (is_null($item->comic))
                        {{$item->articulo->nombre}} - {{$item->articulo->tipo}}
                    @else
                        {{$item->comic->nombre}}  - {{$item->comic->añoEdicion}}
                    @endif
                </td>
                <td>$ {{$item->precio}}</td>
                <td>{{$item->cantidad}}</td>
                <td>$ {{$item->total}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <a href="{{route('ventas.consultar.editar', $item->idVenta)}}">
                            <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a  href="#modal_eliminar-{{$item->idVenta}}" id="boton">
                            <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>

            @include('parciales.ventas.modal-eliminar')
        @endforeach

    </table>
</section>
@endsection

