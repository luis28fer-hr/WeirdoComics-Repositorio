    <a class="logo" href="{{route('inicio')}}">WEIRDO COMICS</a>
    <nav>
        <ul class="nav_links">
            <li><a class="{{request()->routeIs('usuarios*') ? 'link_activo':''}}" href="{{route('usuarios')}}"><i class="fa-solid fa-user"></i>Usuarios</a></li>
            <li><a class="{{request()->routeIs('ventas*')? 'link_activo':''}}" href="{{route('ventas')}}"><i class="fa-sharp fa-solid fa-money-check-dollar"></i>Ventas</a></li>
            <li><a class="{{request()->routeIs('inventario*')? 'link_activo':''}}" href="{{route('inventario')}}"><i class="fa-sharp fa-solid fa-truck-moving"></i>Inventario</a></li>
            <li><a class="{{request()->routeIs('agenda*')? 'link_activo':''}}" href="{{route('agenda')}}"><i class="fa-solid fa-calendar-day"></i>Agenda</a></li>
        <ul>
    </nav>
    <a class="cta" href="{{route('login')}}"><button><i class="fa-solid fa-right-from-bracket"></i>Cerrar Sesión</button></a>
