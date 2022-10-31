@extends('plantilla')

@section('titulo', 'Inventario')

@section('contenido')

    @include('parciales/inventario/opciones_inventario')
    @yield('contenido_inventario')


@endsection
