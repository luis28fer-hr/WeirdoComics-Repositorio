<section id="caja-opciones">
    <div class="opciones" id="opciones-1">
        <p>Marcas</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('Agenda_Marca_Agregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('Agenda_Marca_Agregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('Agenda_Marca_Consultar')? 'consultar_Activa':''}}" id="consultar" href="{{route('Agenda_Marca_Consultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>
            <form action="#">
                <input class="buscar" type="text" placeholder="Buscar registro">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <div class="opciones" id="opciones-2">
        <p>Proovedores</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('Agenda_Proovedor_Agregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('Agenda_Proovedor_Agregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('Agenda_Proovedor_Consultar')? 'consultar_Activa':''}}" id="consultar" href="{{route('Agenda_Proovedor_Consultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>
            <form action="#">
                <input class="buscar" type="text" placeholder="Buscar registro">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

</section>
