@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Centros Locales</h1>
@stop
@section('content')
<div class="container">

    <form action="{{ url('/centrosLocales/'.$centro->id ) }}" method="post" enctype='multipart/form-data'>

        @csrf
        {{ method_field('PATCH')}}
        @include('centrosLocales.form',['modo'=>'Editar'])

    </form>
</div>
@endsection