@extends('ventas')
@section('contenido_ventas')

<div class="form" id="venta">
    <div id = "encabezado">
         <p id="titulo">Datos de venta</p>
    </div>
    <form >
        <div class="container">
            <div class="div1">
                <div class="input__form">
                    <form action="#" id="buscarproducto">
                        <p>CODPRO:</p>
                        <input type="text" id="inputbuscar" value="" name="txtCodProducto" placeholder="Codigo de producto">
                        <button id="botonbuscar"><i class="fa-solid fa-circle-check"></i></button>
                    </form>
                </div>
                <div class="input__form">
                    <textarea name="txtproducto" id="descripcion_producto" cols="30" rows="13" disabled>Producto: Comics Batman V400</textarea>
                </div>
            </div>
            <div class="div2">
                <form action="#">
                    <div class="input__form">
                        <p>Cantidad:</p>
                        <input type="number" name="txtCantidad" value="" placeholder="Cantidad del producto">
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
                        <input type="date" name="txtfecha">
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
                        <button class="btn agregar"> <i class="fa-solid fa-cart-shopping"></i> Agregar </button>
                    </div>
                </form>
            </div>
            <div class="div2">
                <form action="#">
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
                        <button class="btn cancelar">Cancelar</button>
                        <button class="btn vender"><i class="fa-solid fa-cash-register"></i> Vender</button>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>


@endsection

