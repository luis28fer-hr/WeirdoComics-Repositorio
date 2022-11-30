@extends('agenda')

@section('contenido_agenda')

<section class="form" id="form__proovedor">
    <div id = "encabezado">
         <p id="titulo">Editar Datos del Proovedor</p>
    </div>
    <form action="{{route('agenda.proovedor.consultar.editar.actualizar',$consulProvedor->idProveedor)}}" method="POST">
        @csrf
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input class="{{$errors->first('txtproovedor')? 'invalido':''}}" value="{{$consulProvedor->nombre}}" name="txtproovedor" placeholder="Nombre del Proovedor">
                    </div>
                    <div class="input__form">
                        <p>Municipio ID:</p>
                        <input class="{{$errors->first('txtmunicipio')? 'invalido':''}}" value="{{$consulProvedor->municipio}}" name="txtmunicipio" type="text" placeholder="ID del Municipio">
                    </div>
                    <div class="input__form">
                        <p>Contacto:</p>
                        <input class="{{$errors->first('txtcontacto')? 'invalido':''}}" value="{{$consulProvedor->contacto}}" name="txtcontacto" type="text" placeholder="Numero de Contacto">
                    </div>
                    <div class="input__form">
                        <p>Numero Fijo:</p>
                        <input class="{{$errors->first('txtnumero')? 'invalido':''}}" value="{{$consulProvedor->numeroFijo}}" name="txtnumero" type="text" placeholder="Numero Fijo del Proovedor">
                    </div>
                    <div class="input__form">
                        <p>Numero Celular:</p>
                        <input class="{{$errors->first('txtcelular')? 'invalido':''}}" value="{{$consulProvedor->cel}}" name="txtcelular" type="text" placeholder="Numero celular del Proovedor">
                    </div>
                    <div class="input__form">
                        <p>Correo:</p>
                        <input class="{{$errors->first('txtcorreo')? 'invalido':''}}" value="{{$consulProvedor->correo}}" name="txtcorreo" type="text" placeholder="Correo del Proovedor">
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
