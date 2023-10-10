@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.centrosLocales.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.localCenters.create') }}">Agregar Categoria</a>
    @endcan
    <h1>Listar categorias</h1>
@stop

@section('content')
    @if (session('info'))
        {{-- alerta de boostrap --}}
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif
    <div class="card">

        <div class="card-body">
        <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Logo</th>
                <th>Descripcion</th>
                <th>Unicacion</th>
                <th>Ciudad</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($centros as $centro)
                <tr>
                    
                    <td>{{$centro->id}}</td>
                    <td>{{$centro->Nombre}}</td>

                    <td>
                        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$centro->Logo }}" width="150" alt="150">
                    
                    </td>

                    <td>{{$centro->Descripcion}}</td>
                    <td>{{$centro->Ubicacion}}</td>
                    <td>{{$centro->Ciudad}}</td>
                    <td>{{$centro->Telefono}}</td>
                    <td>{{$centro->Correo}}</td>
                    <td>
                    
                    <a href="{{url('/centros/'.$centro->id.'/edit' )}}" class="btn btn-warning">
                    Editar 
                    </a>
                        
                

                    <form action="{{url('/centros/'.$centro->id)}}" class="d-inline" method="post">
                        @csrf
                        {{method_field('DELETE') }}
                        <input  class= "btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar el registro?')"
                        value="Borrar">

                    </form>   




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