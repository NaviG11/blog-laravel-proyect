@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.articles.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.articles.create') }}">Agregar Articulo</a>
    @endcan
    <h1>Listar Leyes</h1>
@stop