<section id="caja-opciones">
    <div class="opciones {{request()->routeIs('Inventario_Comic_C')? 'opciones_opcBuscar_Activa':''}}" id="opciones-1">
        <p>Comics</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('Inventario_Comic_A')? 'agregar_Activa':''}}" id="nuevo" href="{{route('Inventario_Comic_A')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('Inventario_Comic_C')? 'consultar_Activa':''}}" id="consultar" href="{{route('Inventario_Comic_C')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>
            <form action="#">
                <input class="buscar" type="text" placeholder="Buscar registro">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <div class="opciones {{request()->routeIs('Inventario_Articulo_C')? 'opciones_opcBuscar_Activa':''}}" id="opciones-2">
        <p>Articulos</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('Inventario_Articulo_A')? 'agregar_Activa':''}}" id="nuevo" href="{{route('Inventario_Articulo_A')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('Inventario_Articulo_C')? 'consultar_Activa':''}}" id="consultar" href="{{route('Inventario_Articulo_C')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>
            <form action="#">
                <input class="buscar" type="text" placeholder="Buscar registro">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

</section>
