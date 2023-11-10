@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>VIDEOS</h1>
@stop
@section('content')

PRINCIPAN VIDEOS
<div class="container">
    <div class="card">
        <div class="card-body">
            
            <table class="table table-striped">
                
                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <h4>Titulo: </h4>
                            <p>{{ $video->title }}</p>
                            <h4>Descripción: </h4>
                                <p>{{ $video->description }}</p>
                            <iframe width="560" height="315" src="{{ $video->video_url }}" frameborder="0" allowfullscreen></iframe>
                            <br />
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