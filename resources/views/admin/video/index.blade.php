@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Centro de apoyo</h1>
@stop
@section('content')

PRINCIPAN INDEX
<div class="container">
    <div class="card">
        <div class="card-body">
            </br>
            <a class="btn btn-secondary btn-sm float-right" href="{{ route('video.create') }}">Agregar Videos</a>
            </br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Url</th>
                        <th>Estado</th>
                        <th colspan="3" style="text-align: center;">Acciones</th>                
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <td>{{ $video->id }}</td>
                            <td>{{ $video->title }}</td>
                            <td>{{ $video->description }}</td>
                            <td>{{ $video->video_url }}</td>
                            
                            <td>{{ $video->type }}</td>
                            <td width="10px">
                                {{-- @can('video.edit') --}}
                                    <a class="btn btn-warning btn-sm"
                                        href="{{ route('video.edit', $video) }}">Editar</a>
                                {{-- @endcan --}}
                            </td>
                            {{-- para eliminar un video --}}
                            <td width="10px">
                                    <form action="{{ route('video.destroy', $video) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                            </td>                         
                            {{--°°°°°°°°°°°°°°°° Video °°°°°°°°°°°°°°°°°°--}}
                            <td width="10px">
                                {{-- @can('video.edit') --}}
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('video.show', $video) }}">Ver</a>
                                {{-- @endcan --}}
                            </td>
                            {{--°°°°°°°°°°°°°°°° Video °°°°°°°°°°°°°°°°°°--}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
@stop