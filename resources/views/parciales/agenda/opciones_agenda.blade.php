<section id="caja-opciones">
    <div class="opciones {{request()->routeIs('agenda.marca.consultar*')? 'opciones_opcBuscar_Activa':''}}" id="opciones-1">
        <p>Marcas</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('agenda.marca.agregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('agenda.marca.agregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('agenda.marca.consultar*')? 'consultar_Activa':''}}" id="consultar" href="{{route('agenda.marca.consultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte"  href="{{route('agenda.marca.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>
            <form action="{{route('agenda.marca.consultar.filtro')}}" method="POST">
                @csrf
                <input class="buscar" type="text" name="txtnombre" placeholder="{{$errors->first('txtnombre')? 'Porfavor ingrese un valor':'Nombre del empleado'}}" required>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <div class="opciones {{request()->routeIs('agenda.proovedor.consultar*')? 'opciones_opcBuscar_Activa':''}}" id="opciones-2">
        <p>Proovedores</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('agenda.proovedor.agregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('agenda.proovedor.agregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('agenda.proovedor.consultar*')? 'consultar_Activa':''}}" id="consultar" href="{{route('agenda.proovedor.consultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte" href="{{route('agenda.proovedor.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>
            <form action="{{route('agenda.proovedor.consultar.filtro')}}" method="POST">
                @csrf
                <input class="buscar" type="text" name="txtnombre" placeholder="{{$errors->first('txtnombre')? 'Porfavor ingrese un valor':'Nombre del empleado'}}" required>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

</section>
