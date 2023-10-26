@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Revisar</h1>
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
            {!! Form::model($form, ['route' => ['admin.form.update', $form], 'method' => 'put']) !!}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('fecha', 'Fecha') !!}
                        {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('departamento', 'Departamento') !!}
                        {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('direccion', 'Direccion') !!}
                {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ci', 'CI') !!}
                {!! Form::text('ci', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('telefono', 'Telefono') !!}
                {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('denunciado', 'Denunciado') !!}
                {!! Form::text('denunciado', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('cargo', 'Parentesco') !!}
                {!! Form::text('cargo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('detalle', 'Descripcion del Suceso') !!}
                {!! Form::text('detalle', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('archivo', 'Archivos') !!}
                {!! Form::text('archivo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
            </div>
            {{-- Error de validación --}}
            @error('nombre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            
            <div class="row justify-content-between">
                <div class="col-auto"> <!-- Botón a la izquierda -->
                    <div class="form-group">
                        {{-- Botón de "Actualizar" para editar los datos existentes --}}
                        {!! Form::submit('Actualizar Datos', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-auto"> <!-- Botón a la derecha -->
                    <div class="form-group">
                        {{-- Formulario adicional para actualizar el estado --}}
                        {!! Form::open(['method' => 'POST', 'route' => ['actualizar.estado', $form->id]]) !!}
                        {!! Form::submit('Formulario Verificado', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
           
        </div>
    </div>
@stop
