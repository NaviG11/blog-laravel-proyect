@extends('adminlte::page')

@section('title', 'Dashboard')


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
                        <th>DENUNCIANTE</th>
                        <th>CI</th>
                        <th>TELEFONO</th>
                        <th>AGRESOR</th>
                        <th>EVALUACION</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forms as $form)
                        <tr>
                            <td>{{ $form->id }}</td>
                            <td>{{ $form->nombre }}</td>
                            <td>{{ $form->ci }}</td>
                            <td>{{ $form->telefono }}</td>
                            <td>{{ $form->denunciado }}</td>
                            <td>{{ $form->Estado }}</td>

                            <td width="10px">
                                {{-- @can('admin.articles.edit') --}}
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.form.edit', $form) }}">Revisar</a>
                                {{-- @endcan --}}
                            </td>
                            <td width="10px">

                                {{-- @can('admin.articles.destroy') --}}
                                    <form action="{{ route('admin.form.destroy', $form) }}" method="POST">
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
