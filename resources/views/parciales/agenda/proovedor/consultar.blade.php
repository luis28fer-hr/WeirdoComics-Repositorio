
@extends('agenda')
@section('contenido_agenda')
<?php
$nompro = session()->get('txtproovedor')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, proveedor: {$nompro} editado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif

@if (session()->has('eliminacion'))
{!!"<script> Swal.fire(
    'Realizado, proveedor: eliminado correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif
<section class="tabla">
    <table>
        <tr class="uno">
            <th>COD</th>
            <th>Nombre</th>
            <th>Municipio ID</th>
            <th>Contacto</th>
            <th>Numero Fijo</th>
            <th>Numero Celular</th>
            <th>Correo</th>
            <th></th>
        </tr>
        @foreach ($consulProvedor as $consul1)
        <tr>
            <td>{{$consul1->idProveedor}}</td>
            <td>{{$consul1->nombre}}</td>
            <td>{{$consul1->municipio}}</td>
            <td>{{$consul1->contacto}}</td>
            <td>{{$consul1->numeroFijo}}</td>
            <td>{{$consul1->cel}}</td>
            <td>{{$consul1->correo}}</td>
            <td>
                <a href="{{route('agenda.proovedor.consultar.editar',$consul1->idProveedor)}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#modal_eliminar-{{$consul1->idProveedor}}" id="boton">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>

            @include('parciales.agenda.proovedor.modal-eliminar')

            @endforeach
    </table>
</section>


@endsection


