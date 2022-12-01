
@extends('inventario')
@section('contenido_inventario')

<?php
$titul = session()->get('nombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, Comic: {$titul} agregado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif

<section class="form">
    <div id = "encabezado">
         <p id="titulo">Editar Datos del Comic</p>
    </div>
    <form action="{{route('inventario.comic.consultar.editar.actualizar',$consulComic->idComic)}}" method="POST">
        @csrf
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input class="{{$errors->first('nombre')? 'invalido':''}}" value="{{$consulComic->nombre}}" name="nombre" placeholder="Nombre del comic">
                    </div>

                    <div class="input__form">
                        <p>Edición,:</p>
                        <input class="{{$errors->first('edicion')? 'invalido':''}}" value="{{$consulComic->añoEdicion}}" name="edicion" placeholder="Año de edicion">
                    </div>
                    <div class="input__form">
                        <p>Compañía,:</p>
                        <select name="compañia" class="{{$errors->first('compañia')? 'invalido':''}}" >
                            <option value="{{old('compañia')}}" selected disabled>Seleccione una compañia</option>
                            <option value="value1">Value 1</option>
                            <option value="value2">Value 2</option>
                            <option value="value3">Value 3</option>
                        </select>
                    </div>
                    <div class="input__form">
                        <p>Cantidad:</p>
                        <input class="{{$errors->first('cantidad')? 'invalido':''}}" value="{{$consulComic->cantidad}}" name="cantidad" placeholder="Cantidad disponible">
                    </div>
                    <div class="input__form">
                        <p>Precio Compra:</p>
                        <input class="{{$errors->first('compra')? 'invalido':''}}" value="{{$consulComic->precioCompra}}" name="compra" placeholder="Precio compra">
                    </div>
            </div>
            <div class="div2">
                    <div class="input__form">
                        <p>Precio Venta:</p>
                        <input value="16" name="venta" placeholder="Precio venta">
                    </div>
                    <div class="input__form">
                        <p>Fecha ingreso:</p>
                        <input class="{{$errors->first('fecha')? 'invalido':''}}" value="{{$consulComic->fechaIngreso}}" type="date" value="" name="fecha" title="Fecha de ingreso a almacen">
                    </div>
                    <div class="input__form">
                        <p>Proveedor:</p>
                        <select name="proveedor" class="{{$errors->first('edicion')? 'invalido':''}}" >
                            @foreach($consulProve as $proveedor)
                            <option value="{{$proveedor->idProveedor}}"> {{$proveedor->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
        </div>
        <div class="botones">
            <button type="reset" id="cancelar">Cancelar</button>
            <button type="submit" id="guardar">Guardar</button>
        </div>
    </form>
</section>


@endsection

