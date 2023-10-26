@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Video</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ url('/video/'.$video->id) }}" method="post" enctyte="multipart/form-data">
            EDIT VISTA
            @csrf
            {{ method_field('PATCH')}}
            @include('video.form')
            
        </form>        
    </div>

    
</div>

@stop