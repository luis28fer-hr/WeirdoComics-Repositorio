<form action="{{route('ventas.consultar.eliminar', $item->idVenta)}}" method="POST">
    @csrf
    @method('PUT')

<div class="modal" id="modal_eliminar-{{$item->idVenta}}">

    <div class="__body">

        <p class="__titulo">¿Estas seguro de eliminar?</p>
        <div class="__icon">
            <i class="fa-regular fa-trash-can"></i>
            <label for="">NOTA: Al eliminar esta, ya no podra recuperarse la informacion del registro.</label>
        </div>
    </div>
    <div class="__footer">
        <div class="__botones">
            <a href="#boton" class="__btn __cancelar">Cancelar</a>
            <button type="submit" class="__btn __confirmar">Confirmar</button>
        </div>
    </div>

</div>

</form>
