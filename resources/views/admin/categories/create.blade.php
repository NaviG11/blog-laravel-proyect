@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear categor[ia]</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form.control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
