    <a class="logo" href="{{route('Inicio')}}">WEIRDO COMICS</a>
    <nav>
        <ul class="nav_links">
            <li><a class="{{request()->routeIs('Usuarios*') ? 'link_activo':''}}" href="{{route('Usuarios')}}"><i class="fa-solid fa-user"></i>Usuarios</a></li>
            <li><a class="{{request()->routeIs('Ventas*')? 'link_activo':''}}" href="{{route('Ventas')}}"><i class="fa-sharp fa-solid fa-money-check-dollar"></i>Ventas</a></li>
            <li><a class="{{request()->routeIs('Inventario*')? 'link_activo':''}}" href="{{route('Inventario')}}"><i class="fa-sharp fa-solid fa-truck-moving"></i>Inventario</a></li>
            <li><a class="{{request()->routeIs('Agenda')? 'link_activo':''}}" href="{{route('Agenda')}}"><i class="fa-solid fa-calendar-day"></i>Agenda</a></li>
        <ul>
    </nav>
    <a class="cta" href=""><button><i class="fa-solid fa-right-from-bracket"></i>Cerrar Sesión</button></a>
