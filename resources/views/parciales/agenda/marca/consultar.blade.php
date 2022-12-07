
@extends('agenda')
@section('contenido_agenda')

<?php
$nom = session()->get('txtnombre')
?>

@if (session()->has('confirmacion'))
{!!"<script> Swal.fire(
    'Realizado, marca: {$nom} editada correctamente!',
    'Presiona para continuar!',
    'success'
    )</script> "!!}

@endif


    

<section class="tabla">
    <table>
        <tr class="uno">
            <th>COD</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th></th>
        </tr>
        @foreach ($consulMarcas as $consul1)
        <tr>
            <td>{{$consul1->idMarca}}</td>
            <td>{{$consul1->nombre}}</td>
            <td>{{$consul1->fechaRegistro}}</td>
            <td>
                <a href="{{route('agenda.marca.consultar.editar',$consul1->idMarca)}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#modal_eliminar-{{$consul1->idMarca}}" id="boton">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>


            @include('parciales.agenda.marca.modal-eliminar')

            @endforeach
    </table>
</section>


@endsection


