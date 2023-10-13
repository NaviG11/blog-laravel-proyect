@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Centro de apoyo</h1>
@stop
@section('content')
    <div class="container">
        @if (Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden>&times;</span>
                </button>
            </div>
        @endif
        </br>
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.centers.create') }}">Agregar Centros Locales</a>
        </br>
        </br>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Logo</th>
                    <th>Descripcion</th>
                    <th>Unicacion</th>
                    <th>Ciudad</th>
                    {{-- <th>Telefono</th> --}}
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($centros as $centro)
                    <tr>
                        <td>{{ $centro->id }}</td>
                        <td>{{ $centro->Nombre }}</td>
                        <td>
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $centro->Logo }}"
                                width="150" alt="150">
                        </td>
                        <td>{{ $centro->Descripcion }}</td>
                        <td>{{ $centro->Ubicacion }}</td>
                        <td>{{ $centro->Ciudad }}</td>
                        {{-- <td>{{ $centro->Telefono }}</td> --}}
                        <td>{{ $centro->Correo }}</td>
                        <td>
                            <a href="{{ url('admin/centers/' . $centro->id . '/edit') }}" class="btn btn-warning">
                                Editar
                            </a>
                            <form action="{{ url('admin/centers/' . $centro->id) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input class= "btn btn-danger" type="submit"
                                    onclick="return confirm('¿Quieres Borrar el registro?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
