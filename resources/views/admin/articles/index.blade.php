@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    {{--@can('admin.articles.create')--}}
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.articles.create') }}">Agregar Articulo</a>
    {{--@endcan--}}
    <h1>Listar Articulos</h1>
@stop

@section('content')
    
    {{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif --}}

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Ambito De Aplicacion</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->name }}</td>
                            <td>{{ $article->tipo }}</td>
                            <td>{{ $article->descripcion }}</td>
                            <td>{{ $article->ambito_aplicacion }}</td>
                           
                            <td width="10px">
                                {{-- @can('admin.articles.edit') --}}
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.articles.edit', $article) }}">Editar</a>
                                {{-- @endcan --}}
                            </td>
                            <td width="10px">

                                {{-- @can('admin.articles.destroy') --}}
                                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
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
