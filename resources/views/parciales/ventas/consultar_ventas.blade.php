@extends('ventas')
@section('contenido_ventas')

<section class="tabla">
    <table>
        <tr class="uno">
            <th>COD</th>
            <th>Referencia</th>
            <th>CODEMP</th>
            <th>Empleado</th>
            <th>Fecha</th>
            <th>Opciones</th>
        </tr>
        <tr>
            <td>15349</td>
            <td>14562159</td>
            <td>1011</td>
            <td>Colin Maldonado Ricardo</td>
            <td>10 - 05 - 2020</td>
            <td>
                <a href="{{route('VentasEditar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
            <td>166482</td>
            <td>59862061</td>
            <td>5261</td>
            <td>Villegas Vazquez Arturo</td>
            <td>15 - 11 - 2021</td>
            <td>
                <a href="{{route('VentasEditar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
            <td>145622</td>
            <td>1457826</td>
            <td>5261</td>
            <td>Villegas Vazquez Arturo</td>
            <td>15 - 11 - 2021</td>
            <td>
                <a href="{{route('VentasEditar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
            </tr>
        <tr>
            <td>478451</td>
            <td>1234512</td>
            <td>5261</td>
            <td>Villegas Vazquez Arturo</td>
            <td>16 - 11 - 2021</td>
            <td>
                <a href="{{route('VentasEditar')}}">
                        <i title="Editar" class="fa-solid fa-pen-to-square editar"></i>
                    </a>
                    <a href="#">
                        <i title="Eliminar" class="fa-solid fa-trash eliminar"></i>
                    </a>
                </td>
        </tr>
    </table>
</section>
@endsection

