@extends('ventas')
@section('contenido_ventas')

<div class="form" id="venta">
    <div id = "encabezado">
         <p id="titulo">Editar Datos de venta</p>
    </div>
    <form action="{{route('Venta_validar_datos')}}" method="POST">
        @csrf
        <div class="container">
            <div class="div1">
                <div class="input__form">
                    <p>CODPRO:</p>
                    <input class="{{$errors->first('txtCodProducto')? 'invalido':''}}" name="txtCodProducto" value="{{old('txtCodProducto')}}" id="inputbuscar" placeholder="Codigo de producto">
                    <button type="submit" id="botonbuscar"><i class="fa-solid fa-circle-check"></i></button>
                </div>
                <div class="input__form">
                    <textarea name="txtproducto" id="descripcion_producto" cols="30" rows="13" disabled>Producto: Comics Batman V400</textarea>
                </div>
            </div>

            <div class="div2">
                <div class="input__form">
                    <p>Cantidad:</p>
                    <input class="{{$errors->first('txtCantidad')? 'invalido':''}}" name="txtCantidad" value="{{old('txtCantidad')}}" placeholder="Cantidad del producto">
                </div>
                <div class="input__form">
                    <p>Precio:</p>
                    <input type="text" name="txtPrecio" value="$" placeholder="Precio del producto" disabled>
                </div>
                <div class="input__form">
                    <p>Total</p>
                    <input type="text" name="txtTotal" value="$" placeholder="Precio total" disabled>
                </div>
                <div class="input__form">
                    <p>Fecha:</p>
                    <input class="{{$errors->first('txtfecha')? 'invalido':''}}" name="txtfecha" value="{{old('txtfecha')}}" type="date">
                </div>
                <div class="input__form">
                    <p>Vendedor:</p>
                    <input type="text" name="txtCodVendedor" placeholder="Codigo de vendedor" disabled>
                </div>
                <div class="input__form">
                    <p></p>
                    <input type="text" name="txtNombreVendedor" placeholder="Nombre del vendedorr" disabled>
                </div>
                <div class="input__form">
                    <button class="btn cancelar">Cancelar</button>
                    <button type="submit" class="btn agregar"> <i class="fa-solid fa-cart-shopping"></i> Agregar </button>
                </div>
            </div>
            <div class="div2">
                    <div class="input__form">
                        <table id="carritoVenta">
                            <tr>
                                <th>COD</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td>2</td>
                                <td>$59.99</td>
                                <td>$119.98</td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td>2</td>
                                <td>$59.99</td>
                                <td>$119.98</td>
                            </tr>
                            <tr>
                                <th class="fin" colspan="3">Precio total</td>
                                <th class="fin" id="total">$333.96</td>
                            </tr>
                        </table>
                    </div>
                    <div class="input__form">
                        <a href="" class="btn cancelar">Cancelar</a>
                        <a href="" class="btn vender"><i class="fa-solid fa-cash-register"></i> Vender</a>
                    </div>
            </div>
        </div>
    </form>
</div>


@endsection

