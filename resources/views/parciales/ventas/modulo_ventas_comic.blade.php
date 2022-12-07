@extends('parciales.ventas.agregar')

@section('carrito_venta')
    <div class="form" id="venta">
        <div id = "encabezado">
            <p id="titulo">Productos Agregados</p>
        </div>

            <div class="container-venta">
                <div class= "tabla-venta">
                    <table>
                        <tr class="uno">
                            <th>COD</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Opciones</th>
                        </tr>
                            <tr>
                                <td>{{$comic->idComic}}</td>
                                <td>{{$comic->nombre}}</td>
                                <td>{{$comic->precioVenta }}</td>
                                <td><input class="__cantidad" type="number" value="1" name="cantidad"></td>
                                <td><a href="{{route('ventas.agregar')}}" title="eliminar" class="__eliminar-producto"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                    </table>
                </div>
                <a class="__btn" href="{{route('ventas.guardar.comic', $comic->idComic)}}">Vender</a>
            </div>
    </div>

@endsection
