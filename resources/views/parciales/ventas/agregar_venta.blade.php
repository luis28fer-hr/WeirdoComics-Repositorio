@extends('ventas')
@section('contenido_ventas')

<div class="form" id="venta">
    <div id = "encabezado">
         <p id="titulo">Nueva Venta</p>
    </div>
    <form action="#">
        <div class="container">
            <div class="formulario">
                <div>
                    <form action="#" id="buscarproducto">
                        <p>CODPRO:</p>
                        <input type="text" id="inputbuscar" value="" name="txtCodProducto" placeholder="Codigo de producto">
                        <button id="botonbuscar"><i class="fa-solid fa-circle-check"></i></button>
                    </form>
                </div>
                <div>
                    <textarea name="txtproducto" id="descripcion_producto" cols="30" rows="13" disabled>Producto: Comics Batman V400</textarea>

                </div>
            </div>
            <div class="formulario2">
                <form action="#">
                    <div>
                        <p>Cantidad:</p>
                        <input type="number" name="txtCantidad" value="" placeholder="Cantidad del producto">
                    </div>
                    <div>
                        <p>Precio:</p>
                        <input type="text" name="txtPrecio" value="$" placeholder="Precio del producto" disabled>
                    </div>
                    <div>
                        <p>Total</p>
                        <input type="text" name="txtTotal" value="$" placeholder="Precio total" disabled>
                    </div>
                    <div>
                        <p>Fecha:</p>
                        <input type="date" name="txtfecha">
                    </div>
                    <div>
                        <p>Vendedor:</p>
                        <input type="text" name="txtCodVendedor" placeholder="Codigo de vendedor" disabled>
                    </div>
                    <div>
                        <p></p>
                        <input type="text" name="txtNombreVendedor" placeholder="Nombre del vendedorr" disabled>
                    </div>
                    <div>
                        <button class="btn cancelar">Cancelar</button>
                        <button class="btn agregar"> <i class="fa-solid fa-cart-shopping"></i> Agregar </button>
                    </div>
                </form>
            </div>
            <div class="formulario2">
                <form action="#">
                    <div>
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
                    <div>
                        <button class="btn cancelar">Cancelar</button>
                        <button class="btn vender"><i class="fa-solid fa-cash-register"></i> Vender</button>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>


@endsection

