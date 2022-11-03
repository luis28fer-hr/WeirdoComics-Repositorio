
@extends('inventario')
@section('contenido_inventario')

<section class="form">
    <div id = "encabezado">
         <p id="titulo">Datos del Comic</p>
    </div>
    <form>
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input type="text" value="" placeholder="Nombre del comic">
                    </div>

                    <div class="input__form">
                        <p>Edicion:</p>
                        <input type="text" value="" placeholder="Año de edicion">
                    </div>
                    <div class="input__form">
                        <p>Compañia:</p>
                        <select name="select">
                            <option value="0" selected disabled>Nombre de la compañia</option>
                            <option value="value1">Value 1</option>
                            <option value="value2">Value 2</option>
                            <option value="value3">Value 3</option>
                        </select>
                    </div>
                    <div class="input__form">
                        <p>Cantidad:</p>
                        <input type="number" value="" placeholder="Cantidad disponible">
                    </div>
                    <div class="input__form">
                        <p>Precio Compra:</p>
                        <input type="text" value="" placeholder="Precio compra">
                    </div>
            </div>
            <div class="div2">
                    <div class="input__form">
                        <p>Precio Venta:</p>
                        <input type="text" value="" placeholder="Precio venta">
                    </div>
                    <div class="input__form">
                        <p>Fecha ingreso:</p>
                        <input type="date" value="" title="Fecha de ingreso a almacen">
                    </div>
                    <div class="input__form">
                        <p>Proveedor:</p>
                        <select name="select">
                            <option value="0" selected disabled>Nombre del proveedor</option>
                            <option value="value1">Value 1</option>
                            <option value="value2">Value 2</option>
                            <option value="value3">Value 3</option>
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

