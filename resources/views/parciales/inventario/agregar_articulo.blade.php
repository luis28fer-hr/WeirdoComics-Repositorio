@extends('inventario')
@section('contenido_inventario')

<section class="form">
    <div id = "encabezado">
         <p id="titulo">Datos del Articulo</p>
    </div>
    <form action="{{route('Inventario_Validar_Articulo')}}" method="POST">
    @csrf
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input class="{{$errors->first('txtnombre')? 'invalido':''}}" value="{{old('txtnombre')}}" name="txtnombre" placeholder="Nombre del articulo">
                    </div>
                    <div class="input__form">
                        <p>Tipo:</p>
                        <select name="txttipo" class="{{$errors->first('txttipo')? 'invalido':''}}" value="{{old('txttipo')}}">
                            <option value="0" selected disabled>Tipp del articulo</option>
                            <option value="value1">Value 1</option>
                            <option value="value2">Value 2</option>
                            <option value="value3">Value 3</option>
                        </select>
                    </div>
                    <div class="input__form">
                        <p>Marcas:</p>
                        <select name="txtmarcas" class="{{$errors->first('txtmarcas')? 'invalido':''}}" value="{{old('txtmarcas')}}">
                            <option value="0" selected disabled>Marca del articulo</option>
                            <option value="value1">Value 1</option>
                            <option value="value2">Value 2</option>
                            <option value="value3">Value 3</option>
                        </select>
                    </div>
                    <div class="input__form">
                        <p>Descripcion:</p>
                        <input class="{{$errors->first('txtdescripcion')? 'invalido':''}}" value="{{old('txtdescripcion')}}" name="txtdescripcion" placeholder="Descripcion">
                    </div>
                    <div class="input__form">
                        <p>Cantidad:</p>
                        <input type="number" name="txtcantidad" class="{{$errors->first('txtcantidad')? 'invalido':''}}" value="{{old('txtcantidad')}}" placeholder="Cantidad disponible">
                    </div>
                    <div class="input__form">
                        <p>Precio Compra:</p>
                        <input type="date" name="txtpreciocom" class="{{$errors->first('txtpreciocom')? 'invalido':''}}" value="{{old('txtpreciocom')}}" title="Precio de compra">
                    </div>
            </div>
            <div class="div2">
                    <div class="input__form">
                        <p>Precio Venta:</p>
                        <input type="text" name="txtprecioven" class="{{$errors->first('txtprecioven')? 'invalido':''}}" value="{{old('txtprecioven')}}" placeholder="Precio de venta">
                    </div>
                    <div class="input__form">
                        <p>Fecha:</p>
                        <input type="date" name="txtfech" class="{{$errors->first('txtfech')? 'invalido':''}}" value="{{old('txtfech')}}">
                    </div>
                    <div class="input__form">
                        <p>Proveedor:</p>
                        <select name="txtproveedor" class="{{$errors->first('txtproveedor')? 'invalido':''}}" value="{{old('txtproveedor')}}">
                            <option value="0" selected disabled>Nombre del proovedor</option>
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

