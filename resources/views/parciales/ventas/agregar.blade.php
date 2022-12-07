@extends('ventas')
@section('contenido_ventas')
<?php
$codArt = session()->get('txtNombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, venta de: {$codArt} agregada correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif

@if (session()->has('no_existe'))
{!!"<script> Swal.fire(
    'Lo siento, el producto no existe o no esta disponible!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif

<div class="form" id="venta">
    <div id = "encabezado">
         <p id="titulo">Busqueda</p>
    </div>

    <form action="{{route('ventas.añadir')}}" method="POST">
        @csrf
        <div class="container-venta">
            <div class= "busqueda-venta">
                <select name="inventario" id="" class="{{$errors->first('inventario')? '__invalid':''}}">
                    <option value="0" selected disabled>Seleccione su inventario</option>
                    <option value="1">Comics</option>
                    <option value="2">Articulos</option>
                </select>
                <input class="input_venta {{$errors->first('cod_pro')? '__invalid':''}}" type="text" name="cod_pro" placeholder="CODIGO DE PRODUCTO" value="{{old('cod_pro')}}">
            </div>
            <button type="submit">Agregar</button>
        </div>
    </form>
</div>

@yield('carrito_venta')


@endsection

