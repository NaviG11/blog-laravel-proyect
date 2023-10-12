@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Subir Archivo</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        {{-- <input type="file" name="file" id="file" placeholder="Subir archivo"> --}}

                        <div class="form-group">
                            <label>Archivo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="file">
                                    @error('file')
                                        <div class="alert alert-danger mt-1 mb-1">
                                            {{ message }}
                                        </div>
                                    @enderror
                                    <label class="custom-file-label" for>Elegir archivo</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" value="Guardar" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-lg-12">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Path</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ficheros as $fichero)
                        <tr>
                            <td>{{ $fichero->name }}</td>
                            <td>{{ $fichero->path }}</td>
                            <td>
                                <a href="{{ $fichero->path }}">Descargar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div> --}}
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    {{-- <th style="width: 10px">#</th> --}}
                    <th>Nombre</th>
                    <th>Ruta</th>
                    <th style="width: 40px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-danger">55%</span></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Clean database</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-warning">70%</span></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Cron job running</td>
                    <td>
                        <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-primary">30%</span></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Fix and squish bugs</td>
                    <td>
                        <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-success">90%</span></td>
                </tr> --}}
                @foreach ($ficheros as $fichero)
                    <tr>
                        <td>{{ $fichero->name }}</td>
                        <td>{{ $fichero->path }}</td>
                        <td>
                            <a class="badge bg-info" href="{{ $fichero->path }}">Descargar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
