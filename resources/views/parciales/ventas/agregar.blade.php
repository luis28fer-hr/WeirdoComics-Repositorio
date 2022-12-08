@extends('ventas')
@section('contenido_ventas')
<?php
$codArt = session()->get('txtNombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, venta de: {$codArt} correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif

@if (session()->has('no_existe'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Lo siento, el producto no existe o no esta disponible!',
    text: 'Presiona para continuar!',
    })</script> "!!}
@endif

<div class="form" id="venta">
    <div id = "encabezado">
         <p id="titulo">Busqueda</p>
    </div>

    <form action="{{route('ventas.añadir')}}" method="POST">
        @csrf
        <div class="container-venta">
            <div class= "busqueda-venta">
                <select name="inventario" id="" class="{{$errors->first('inventario')? '__invalid':''}}" required>
                    <option value="1" selected>Comics</option>
                    <option value="2">Articulos</option>
                </select>
                <input class="input_venta {{$errors->first('cod_pro')? '__invalid':''}}" type="text" name="cod_pro" placeholder="CODIGO DE PRODUCTO" value="{{old('cod_pro')}}" required>
            </div>
            <button type="submit">Agregar</button>
        </div>
    </form>
</div>

@yield('carrito_venta')


@endsection

