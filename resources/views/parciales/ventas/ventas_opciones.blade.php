
    <section id="caja-opciones">
        <div class="opciones {{request()->routeIs('VentasConsultar')? 'opciones_opcBuscar_Activa':''}}" id="opciones-1">
            <p>Ventas</p>
            <div>
                <ul>
                    <li><a class="{{request()->routeIs('VentasAgregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('VentasAgregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                    <li><a class="{{request()->routeIs('VentasConsultar*')? 'consultar_Activa':''}}" id="consultar" href="{{route('VentasConsultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                    <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
                </ul>
                 <form action="#">
                    <input class="buscar" type="text" placeholder="Buscar registro">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
{{--         <div class="opciones" id="opciones-2">
            <p>Ventas</p>
            <div>
                <ul>
                    <li><a class="{{request()->routeIs('VentasAgregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('VentasAgregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                    <li><a class="{{request()->routeIs('VentasConsultar')? 'consultar_Activa':''}}" id="consultar" href="{{route('VentasConsultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                    <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
                </ul>
                <form class="{{request()->routeIs('VentasConsultar')? 'buscar_visible':'buscar_no_visivle'}}" action="#">
                    <input class="buscar" type="text" placeholder="Buscar registro">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div> --}}

    </section>
