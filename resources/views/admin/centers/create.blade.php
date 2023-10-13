@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ url('admin/centers') }}" method="post" enctype='multipart/form-data'>
                @csrf
                @include('admin.centers.form', ['modo' => 'Crear'])
            </form>
        </div>
    </div>
@stop
