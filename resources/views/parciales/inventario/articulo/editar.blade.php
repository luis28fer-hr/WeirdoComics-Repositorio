@extends('inventario')
@section('contenido_inventario')

<?php
$nomArt = session()->get('txtnombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, Articulo: {$nomArt} agregado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif
<section class="form">
    <div id = "encabezado">
         <p id="titulo">Editar Datos del Articulo</p>
    </div>
    <form action="{{route('inventario.articulo.consultar.editar.actualizar',$consulArticulo->idArticulo)}}" method="POST">
    @csrf
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input class="{{$errors->first('txtnombre')? 'invalido':''}}" value="{{$consulArticulo->nombre}}" name="txtnombre" placeholder="Nombre del articulo">
                    </div>
                    <div class="input__form">
                        <p>Tipo:</p>
                        <select name="txttipo" class="{{$errors->first('txttipo')? 'invalido':''}}">
                            <option value="{{$consulArticulo->tipo}}" selected>{{$consulArticulo->tipo}}</option>
                            <option value="Tipo 1">Tipo 1</option>
                            <option value="Tipo 2">Tipo 2</option>
                            <option value="Tipo 3">Tipo 3</option>
                        </select>
                    </div>
                    <div class="input__form">
                        <p>Marca:</p>
                        <select name="txtmarcas" class="{{$errors->first('txtmarcas')? 'invalido':''}}" value="{{$consulArticulo->id_marca}}">
                            <option value="{{$marcaArticulo->idMarca}}">{{$marcaArticulo->idMarca}} - {{$marcaArticulo->nombre}}</option>
                            @foreach($consulMarca as $marca)
                                <option value="{{$marca->idMarca}}">{{$marca->idMarca}} - {{$marca->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input__form">
                        <p>Descripción:</p>
                        <input class="{{$errors->first('txtdescripcion')? 'invalido':''}}" value="{{$consulArticulo->descripcion}}" name="txtdescripcion" placeholder="Descripcion">
                    </div>
                    <div class="input__form">
                        <p>Cantidad:</p>
                        <input name="txtcantidad" class="{{$errors->first('txtcantidad')? 'invalido':''}}" value="{{$consulArticulo->cantidad}}" placeholder="Cantidad disponible">
                    </div>
                    <div class="input__form">
                        <p>Precio Compra:</p>
                        <input name="txtpreciocom" class="{{$errors->first('txtpreciocom')? 'invalido':''}}" value="{{$consulArticulo->precioCompra}}" placeholder="Precio de compra">
                    </div>
            </div>
            <div class="div2">
                    <div class="input__form">
                        <p>Precio Venta:</p>
                        <input type="text" name="txtprecioven" placeholder="Precio Automatico" disabled>
                    </div>
                    <div class="input__form">
                        <p>Fecha:</p>
                        <input type="date" name="txtfech" class="{{$errors->first('txtfech')? 'invalido':''}}" value="{{$consulArticulo->fechaIngreso}}">
                    </div>
                    <div class="input__form">
                        <p>Proveedor:</p>
                        <select name="txtproveedor" class="{{$errors->first('txtproveedor')? 'invalido':''}}" value="{{$consulArticulo->id_proveedor}}">
                            <option value="{{$proovedorArticulo->idProveedor}}">{{$proovedorArticulo->idProveedor}} - {{$proovedorArticulo->nombre}}</option>
                            @foreach($consulProve as $proveedor)
                                <option value="{{$proveedor->idProveedor}}">{{$proveedor->idProveedor}} {{$proveedor->nombre}}</option>
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

