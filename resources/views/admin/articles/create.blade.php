@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Reglamento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.articles.store', 'files' => true, 'autocomplete' => 'off']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}

                {{-- Error de validación --}}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('tipo', 'Tipo') !!}
                {!! Form::text('tipo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Artículo']) !!}

                {{-- Error de validación --}}
                @error('tipo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion') !!}
                {!! Form::text('descripcion', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese la Descripcion del Articulo',
                ]) !!}

                {{-- Error de validación --}}
                @error('descripcion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('ambito_aplicacion', 'Ambito de Aplicacion') !!}
                {!! Form::text('ambito_aplicacion', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el ambito de aplicacion',
                ]) !!}

                {{-- Error de validación --}}
                @error('ambito_aplicacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {{-- Un input tipo file --}}
            <div class="form-group">
                {!! Form::label('file', 'Documento') !!}
                {!! Form::file('file', ['class' => 'form-control-file']) !!}
            </div>

            {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
