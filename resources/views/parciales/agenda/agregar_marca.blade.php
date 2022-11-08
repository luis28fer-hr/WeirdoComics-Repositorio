@extends('agenda')

@section('contenido_agenda')

<section class="form">
    <div id = "encabezado">
         <p id="titulo">Datos del Marca</p>
    </div>
    <form action="" method="POST">

        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input class="{{$errors->first('txtnombre')? 'invalido':''}}" value="{{old('txtnombre')}}" name="txtnombre" placeholder="Nombre del articulo">
                    </div>
                    <div class="input__form">
                        <p>Fecha:</p>
                        <input class="{{$errors->first('txtfecha')? 'invalido':''}}" value="{{old('txtfecha')}}" name="txtfecha" type="date" placeholder="Nombre del articulo">
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
