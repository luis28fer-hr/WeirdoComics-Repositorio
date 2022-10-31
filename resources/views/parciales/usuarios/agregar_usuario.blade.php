
@extends('usuarios')
@section('contenido_usuarios')

<section class="form">
    <div id = "encabezado">
         <p id="titulo">Datos del empleado</p>
    </div>
    <form>
        <div class="container">
            <div class="div1">
                    <div class="input__form">
                        <p>Nombre:</p>
                        <input type="text" value="" placeholder="Nombre del empleado">
                    </div>

                    <div class="input__form">
                        <p>Apellido P:</p>
                        <input type="text" value="" placeholder="Apellido Patarno del empleado">
                    </div>
                    <div class="input__form">
                        <p>Apellido M:</p>
                        <input type="text" value="" placeholder="Apellido Materno del empleado">
                    </div>
                    <div class="input__form">
                        <p>Num Cel:</p>
                        <input type="number" value="" placeholder="Número celular del empleado">
                    </div>
                    <div class="input__form">
                        <p>Fecha ingreso:</p>
                        <input type="date" value="" title="Fecha de registro">
                    </div>
            </div>
            <div class="div2">
                    <div class="input__form">
                        <p>Correo:</p>
                        <input type="email" value="" placeholder="Correo del empleado">
                    </div>
                    <div class="input__form">
                        <p>Contraseña:</p>
                        <input type="password" value="" placeholder="Contraseña del empleado ">
                    </div>
                    <div class="input__form">
                        <p></p>
                        <input type="password" value="" placeholder="Confirmar contraseña">
                    </div>

                    <div class="input__form">
                        <p>Cargo:</p>
                        <select name="select">
                            <option value="0" selected disabled>Cargo del empleado</option>
                            <option value="value1">Value 1</option>
                            <option value="value2">Value 2</option>
                            <option value="value3">Value 3</option>
                        </select>
                    </div>
            </div>
        </div>
        <div class="botones">
            <a href=""><button>Cancelar</button></a>
            <a id="guardar"href=""><button>Guardar</button></a>
        </div>
    </form>
</section>


@endsection

