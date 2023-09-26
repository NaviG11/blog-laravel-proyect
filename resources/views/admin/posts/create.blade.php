@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nueva publicación</h1>
    <h2>En esta sección puedes crear una nueva publicación</h2>
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

            {!! Form::open(['route' => 'admin.posts.store', 'files' => true, 'autocomplete' => 'off']) !!}
            {{-- {!! Form::hidden('user_id', auth()->user()->id) !!} --}}
            {{-- INICIO FORMULARIO --}}
            @include('admin.posts.partials.form')
            {{-- FIN FORMULARIO --}}
            {{-- {!! Form::submit('Crear publicación', ['class' => 'btn btn-primary']) !!} --}}
            {{-- Crea un boton tipo submit --}}
            <button
            type="submit"
            class="btn btn-primary">
                Crear publicación
            </button>
            {!! Form::close() !!}
        </div>
    </div>
@stop

{{-- Estilos adicionales --}}
@section('css')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }
        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

{{-- Código JS --}}
@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
        ClassicEditor
            .create(document.querySelector('#extract'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });
        // Imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result)
            };
            reader.readAsDataURL(file);
        }
    </script>
@endsection
