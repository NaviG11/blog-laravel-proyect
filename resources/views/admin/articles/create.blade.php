@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Articulo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.articles.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}

                {{-- Error de validación --}}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
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

            {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
