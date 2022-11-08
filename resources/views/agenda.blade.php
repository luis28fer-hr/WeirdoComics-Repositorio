@extends('plantilla')

@section('titulo', 'Agenda')

@section('contenido')

    @include('parciales.agenda.opciones_agenda')
    
    @yield('contenido_agenda')

@endsection
