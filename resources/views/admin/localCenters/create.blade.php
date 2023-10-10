@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Centros Locales</h1>
@stop
section('content')
<div class="container">

    <form action="{{url('/centrosLocales')}}" method="post" enctype='multipart/form-data'>
    @csrf
    @include('centrosLocales.form',['modo'=>'Crear'])
    


    </form>
</div>
@endsection