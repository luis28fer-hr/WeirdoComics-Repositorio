@extends('plantilla')

@section('titulo', 'Ventas')

@section('contenido')

    @include('parciales/ventas/ventas_opciones')

    @yield('contenido_ventas')
@endsection
