@extends('plantilla')

@section('titulo', 'Usuarios')

@section('contenido')

    @include('parciales/usuarios/usuarios_opciones')

    @yield('contenido_usuarios')

@endsection
