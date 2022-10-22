@extends('usuarios')
@section('contenido_usuarios')

    <section class="tabla">
        <table>
            <tr class="uno">
                <th>COD</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Cargo</th>
                <th>Ingreso</th>
                <th>Opciones</th>
            </tr>
            <tr>
                <td>15349</td>
                <td>Colin Maldonado Ricardo</td>
                <td>4485296374</td>
                <td>ricardo.colin@weirdocomis.com</td>
                <td>rCocado156</td>
                <td>Administrador</td>
                <td>10 - 05 - 2020</td>
                <td class="opciones"><a href="#"><i title="Editar" class="fa-solid fa-pen-to-square editar"></i><i title="Eliminar" class="fa-solid fa-trash eliminar"></i></a></td>
            </tr>
            <tr>
                <td>26481</td>
                <td>Hernandez Reyes Luis Fernando</td>
                <td>4481236896</td>
                <td>luis.hernandez@weirdocomis.com</td>
                <td>lUrFs1563</td>
                <td>Empleado</td>
                <td>17 - 10 - 2021</td>
                <td class="opciones"><a href="#"><i title="Editar" class="fa-solid fa-pen-to-square editar"></i><i title="Eliminar" class="fa-solid fa-trash eliminar"></i></a></td>
            </tr>
            <tr>
                <td>147256</td>
                <td>Enriques Tellez Jose Agustin</td>
                <td>4157826591</td>
                <td>jose.tellez@weirdocomis.com</td>
                <td>jToEg1532</td>
                <td>Empleado</td>
                <td>25 - 01 - 2022</td>
                <td class="opciones"><a href="#"><i title="Editar" class="fa-solid fa-pen-to-square editar"></i><i title="Eliminar" class="fa-solid fa-trash eliminar"></i></a></td>
            </tr>
            <tr>
                <td>256813</td>
                <td>Villegas Vazquez Arturo</td>
                <td>4785125482</td>
                <td>arturo.vazquez@weirdocomis.com</td>
                <td>aVrzerO258</td>
                <td>Empleado</td>
                <td>29 - 12 - 2021</td>
                <td class="opciones"><a href="#"><i title="Editar" class="fa-solid fa-pen-to-square editar"></i><i title="Eliminar" class="fa-solid fa-trash eliminar"></i></a></td>
            </tr>
        </table>
    </section>
@endsection

