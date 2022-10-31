
    <section id="caja-opciones">
        <div class="opciones" id="opciones-1">
            <p>Usuarios</p>
            <div>
                <ul>
                    <li><a class="{{request()->routeIs('UsuariosAgregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('UsuariosAgregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                    <li><a class="{{request()->routeIs('UsuariosConsultar')? 'consultar_Activa':''}}" id="consultar" href="{{route('UsuariosConsultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                    <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
                </ul>
            </div>
        </div>

    </section>
