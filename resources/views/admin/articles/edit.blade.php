@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Reglamento</h1>
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
            {{-- Form::model(variable, ) --}}
            {!! Form::model($article, ['route' => ['admin.articles.update', $article], 'method' => 'put']) !!}
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
                {!! Form::text('tipo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Articulo']) !!}

                {{-- Error de validación --}}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion') !!}
                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Descripcion del Articulo']) !!}

                {{-- Error de validación --}}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('ambito_aplicacion', 'Ambito de Aplicacion') !!}
                {!! Form::text('ambito_aplicacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el ambito de aplicacion']) !!}

                {{-- Error de validación --}}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {{-- Un input tipo file --}}
            {{-- <div class="form-group">
                {!! Form::label('file', 'Documento') !!}
                {!! Form::file('file', ['class' => 'form-control-file']) !!}
            </div> --}}
            <div class="form-group">
                {!! Form::label('file', 'Documento que se mostrará en la publicación') !!}
                {!! Form::file('file', ['class' => 'form-control-file']) !!}
                @error('file')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop