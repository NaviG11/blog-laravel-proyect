@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h2>Crear nuevo video</h2>
    <h1>En esta sección puedes crear un nuevo video</h1>
@stop

@section('content')
    
CREATE VISTA
<div class="card">
    <div class="card-body">
        <form action="{{ url('/video') }}" method="post" enctyte="multipart/form-data">
            @csrf
            @include('video.form')

        </form>
    </div>
</div>
@stop