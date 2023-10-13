@extends('adminlte::page')

@section('title', 'Dashboard')



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
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.evento.create') }}">Agregar Nuevo Evento</a>



        </br>
        </br>


        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Lugar</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Link</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($eventos as $evento)
                    <tr>

                        <td>{{ $evento->id }}</td>
                        <td>{{ $evento->Nombre }}</td>

                        <td>
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $evento->Imagen }}"
                                width="150" alt="150">

                        </td>

                        <td>{{ $evento->Descripcion }}</td>
                        <td>{{ $evento->Lugar }}</td>
                        <td>{{ $evento->Fecha }}</td>
                        <td>{{ $evento->Hora }}</td>
                        <td>{{ $evento->Link }}</td>

                        <td>
                            <a href="{{ url('admin/evento/' . $evento->id . '/edit') }}" class="btn btn-warning">
                                Editar
                            </a>



                            <form action="{{ url('admin/evento/' . $evento->id) }}" class="d-inline" method="post">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
