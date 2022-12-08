<form action="{{route('inventario.articulo.consultar.generarpedido', $consul->idArticulo)}}" method="POST">
    @csrf
<div class="modal pedido" id="modal_pedido-{{$consul->idArticulo}}">

    <div class="__body">

        <p class="__titulo-pedido">Generar pedido</p>
        <div class="__icon-pedido">
            <i class="fa-solid fa-handshake"></i>
            <label for="">Datos de pedido</label>
            <input type="text" placeholder="Proovedor" value="{{$consul->proveedores->nombre}}" disabled>
            <input type="text" placeholder="Correo" value="{{$consul->proveedores->correo}}" disabled>
            <input type="text" placeholder="Producto" name="nombre" value="{{$consul->nombre}}" disabled>
            <input class="{{$errors->first('cantidad')? 'invalido':''}}" type="text" placeholder="Cantidad" name="cantidad">
        </div>
    </div>
    <div class="__footer">
        <div class="__botones">
            <a href="#b" class="__btn __cancelar">Cancelar</a>
            <button class="__btn __confirmar-pedido">Confirmar</button>
        </div>
    </div>

</div>

</form>
