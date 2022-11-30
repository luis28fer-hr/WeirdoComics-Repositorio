@extends('agenda')

@section('contenido_agenda')

<section class="form" id="form__marca">
    <div id = "encabezado">
         <p id="titulo">Editar Datos del Marca</p>
    </div>
    <form action="{{route('agenda.marca.consultar.editar.actualizar',$consulMarca->idMarca)}}" method="POST">
        @csrf
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input class="{{$errors->first('txtnombre')? 'invalido':''}}" value="{{$consulMarca->nombre}}" name="txtnombre" placeholder="Nombre del articulo">
                    </div>
                    <div class="input__form">
                        <p>Fecha:</p>
                        <input class="{{$errors->first('txtfecha')? 'invalido':''}}" value="{{$consulMarca->fechaRegistro}}" name="txtfecha" type="date" placeholder="Nombre del articulo">
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
