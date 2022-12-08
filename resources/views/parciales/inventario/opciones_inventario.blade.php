<section id="caja-opciones">
    <div class="opciones {{request()->routeIs('inventario.comic.consultar*')? 'opciones_opcBuscar_Activa':''}}" id="opciones-1">
        <p>Comics</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('inventario.comic.agregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('inventario.comic.agregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('inventario.comic.consultar*')? 'consultar_Activa':''}}" id="consultar" href="{{route('inventario.comic.consultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte" href="{{route('inventario.comic.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>

            <form action="{{route('inventario.comic.consultar.filtro')}}" method="POST">
                @csrf
                <input class="buscar" type="text" name="txtnombre" placeholder="{{$errors->first('txtnombre')? 'Porfavor ingrese un valor':'Nombre del producto'}}" required>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

        </div>
    </div>
    <div class="opciones {{request()->routeIs('inventario.articulo.consultar*')? 'opciones_opcBuscar_Activa':''}}" id="opciones-2">
        <p>Articulos</p>
        <div>
            <ul>
                <li><a class="{{request()->routeIs('inventario.articulo.agregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('inventario.articulo.agregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                <li><a class="{{request()->routeIs('inventario.articulo.consultar*')? 'consultar_Activa':''}}" id="consultar" href="{{route('inventario.articulo.consultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                <li><a id="reporte" href="{{route('inventario.articulo.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
            </ul>
            <form action="{{route('inventario.articulo.consultar.filtro')}}" method="POST">
                @csrf
                <input class="buscar" type="text" name="txtnombre" placeholder="{{$errors->first('txtnombre')? 'Porfavor ingrese un valor':'Nombre del producto'}}" required>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

</section>
