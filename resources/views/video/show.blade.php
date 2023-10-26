@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h2>°°°°°°°°°° Detalles del video SHOW °°°°°°°°°°°°°°</h2>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <h4>Titulo: </h4>
            <p>{{ $video->title }}</p>
        <h4>Descripción: </h4>
            <p>{{ $video->description }}</p>
        <h4>Tipo: </h4>
            <p>{{ $video->type }}</p>
        <iframe width="560" height="315" src="{{ $video->video_url }}" frameborder="0" allowfullscreen></iframe>
        <br />
        
        <a class="btn btn-primary" href="{{ url('video') }}">Regresar</a>
    </div>
</div>
@stop
