@extends('layouts.plantilla1')
@section('titulo','Componentes')

@section('contenido')
    <x-Card encabezado="componente" titulo="dinamico" textoboton="enviar"> soy el texto del primer componente</x-Card>
    <x-Card encabezado="componente2" titulo="dinamico2" textoboton="enviar2"> soy el texto del primer componente2</x-Card>
    <x-alert tipo="success">verde</x-alert>
    <x-alert tipo="primary">azul</x-alert>
    <x-alert tipo="danger">rojo</x-alert>
    @endsection