@extends('agenda')

@section('contenido_agenda')
<?php
$nompro = session()->get('txtproovedor')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, proveedor: {$nompro} agregado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif
<section class="form" id="form__proovedor">
    <div id = "encabezado">
         <p id="titulo">Datos del Proovedor</p>
    </div>
    <form action="{{route('agenda.proovedor.guardar')}}" method="POST">
        @csrf
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input class="{{$errors->first('txtproovedor')? 'invalido':''}}" value="{{old('txtproovedor')}}" name="txtproovedor" placeholder="Nombre del Proovedor">
                    </div>
                    <div class="input__form">
                        <p>Municipio ID:</p>
                        <input class="{{$errors->first('txtmunicipio')? 'invalido':''}}" value="{{old('txtmunicipio')}}" name="txtmunicipio" type="text" placeholder="ID del Municipio">
                    </div>
                    <div class="input__form">
                        <p>Contacto:</p>
                        <input class="{{$errors->first('txtcontacto')? 'invalido':''}}" value="{{old('txtcontacto')}}" name="txtcontacto" type="text" placeholder="Numero de Contacto">
                    </div>
                    <div class="input__form">
                        <p>Numero Fijo:</p>
                        <input class="{{$errors->first('txtnumero')? 'invalido':''}}" value="{{old('txtnumero')}}" name="txtnumero" type="text" placeholder="Numero Fijo del Proovedor">
                    </div>
                    <div class="input__form">
                        <p>Numero Celular:</p>
                        <input class="{{$errors->first('txtcelular')? 'invalido':''}}" value="{{old('txtcelular')}}" name="txtcelular" type="text" placeholder="Numero celular del Proovedor">
                    </div>
                    <div class="input__form">
                        <p>Correo:</p>
                        <input class="{{$errors->first('txtcorreo')? 'invalido':''}}" value="{{old('txtcorreo')}}" name="txtcorreo" type="text" placeholder="Correo del Proovedor">
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
