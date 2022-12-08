@extends('ventas')
@section('contenido_ventas')

<form action ="
                @if (is_null($articulo))
                {{route('ventas.consultar.editar.actualizar.comic', $consultaVenta->idVenta)}}
                @else
                {{route('ventas.consultar.editar.actualizar.articulo', $consultaVenta->idVenta)}}
                @endif
            "method="POST">
    @csrf

    <div class="form" id="venta-editar">
        <div id = "encabezado">
            <p id="titulo">Empleado</p>
        </div>
        <div class="container-venta">
            <div class= "busqueda-venta">
                <input class="input_vendedor" type="text" name="vendedor" placeholder="Nombre del vendedor" value="{{$usuario->nombre}} {{$usuario->apellidoP}} {{$usuario->apellidoM}}" disabled>
            </div>
        </div>

    </div>
    <div class="form" id="venta-editar">
        <div id = "encabezado">
            <p id="titulo">Producto</p>
        </div>
        <div class="container-venta">
            <div class= "busqueda-venta">
                <select name="producto" class="input_producto">
                    @if (is_null($articulo))
                        <option value="{{$comic->idComic}}" selected>{{$comic->idComic}} - {{$comic->nombre}}</option>
                        @foreach ($consultaComics as $comicItem)
                            <option value="{{$comicItem->idComic}}">{{$comicItem->idComic}} - {{$comicItem->nombre}}</option>
                        @endforeach
                    @else
                        <option value="{{$articulo->idArticulo}}" selected>{{$articulo->idArticulo}}- {{$articulo->nombre}}</option>
                        @foreach ($consultaArticulos as $articuloItem)
                            <option value="{{$articuloItem->idArticulo}}">{{$articuloItem->idArticulo}} - {{$articuloItem->nombre}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class= "busqueda-venta">
                <input class="input_producto {{$errors->first('cantidad')? '__invalid':''}}" name="cantidad" placeholder="Cantidad" value="{{$consultaVenta->cantidad}}">
            </div>
            <button type="submit">Actualizar</button>
        </div>

    </div>
</form>

@endsection

