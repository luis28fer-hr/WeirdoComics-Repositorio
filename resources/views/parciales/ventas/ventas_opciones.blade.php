
    <section id="usuarios">
        <p>Ventas</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('VentasAgregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('VentasAgregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('VentasConsultar')? 'consultar_Activa':''}}" id="consultar" href="{{route('VentasConsultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>
            <form class="{{request()->routeIs('VentasConsultar')? 'buscar_visible':'buscar_no_visivle'}}" action="#">
                <input class="buscar" type="text" placeholder="Buscar registro">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </section>

{{--     <section id="ventas">
        <p>Usuarios</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('UsuariosAgregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('UsuariosAgregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('UsuariosConsultar')? 'consultar_Activa':''}}" id="consultar" href="{{route('UsuariosConsultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>
            <form action="">
                <input type="text">
                <button>Buscar</button>
            </form>
        </div>
    </section> --}}


