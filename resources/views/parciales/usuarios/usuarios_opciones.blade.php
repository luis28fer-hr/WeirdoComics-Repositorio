
    <section id="caja-opciones">
        <div class="opciones {{request()->routeIs('usuarios.consultar*')? 'opciones_opcBuscar_Activa':''}}" id="opciones-1">
            <p>Usuarios</p>
            <div>
                <ul>
                    <li><a class="{{request()->routeIs('usuarios.agregar')? 'agregar_Activa':''}}" id="nuevo" href="{{route('usuarios.agregar')}}"><i class="fa-sharp fa-solid fa-square-plus"></i><button>Nuevo</button></a></li>
                    <li><a class="{{request()->routeIs('usuarios.consultar*')? 'consultar_Activa':''}}" id="consultar" href="{{route('usuarios.consultar')}}"><i class="fa-sharp fa-solid fa-magnifying-glass-plus"></i><button>Consultar</button></a></li>
                    <li><a id="reporte" href="#"><i class="fa-solid fa-file-pdf"></i><button>Reporte</button></a></li>
                </ul>
                <form action="{{route('usuarios.consultar.filtro')}}" method="POST">
                    @csrf
                    <input class="buscar" type="text" name="txtnombre" placeholder="{{$errors->first('txtnombre')? 'Porfavor ingrese un valor':'Nombre del empleado'}}" required>
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>

    </section>
