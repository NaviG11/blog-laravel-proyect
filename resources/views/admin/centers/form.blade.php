<h1>{{ $modo }} Centro de ayuda </h1>
@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre"
        value="{{ isset($centro->Nombre) ? $centro->Nombre : old('Nombre') }}" id="Nombre">
</div>

<div class="form-group">
    <label for="Logo">Logo</label>
    @if (isset($centro->Logo))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $centro->Logo }}" width="100"
            alt="">
    @endif
    <input type="file" class="form-control" name="Logo" value="" id="Logo">
</div>


<div class="form-group">
    <label for="Descripcion">Descripcion</label>
    <input type="text" class="form-control" name ="Descripcion"
        value="{{ isset($centro->Descripcion) ? $centro->Descripcion : old('Descripcion') }}" id ="Descripcion">

</div>

<div class="form-group">
    <label for="Ubicacion">Ubicacion</label>
    <input type="text" class="form-control" name="Ubicacion"
        value="{{ isset($centro->Ubicacion) ? $centro->Ubicacion : old('Ubicacion') }}"id="Ubicacion">

</div>

<div class="form-group">
    <label for="Ciudad">Ciudad</label>
    <input type="text" class="form-control" name="Ciudad"
        value="{{ isset($centro->Ciudad) ? $centro->Ciudad : old('Ciudad') }}" id="Ciudad">

</div>

{{-- <div class="form-group">
       <label for="Telefono">Telefono</label>
       <input type="tel" class="form-control" name="Telefono" value="{{ isset($centro->Telefono)?$centro->Telefono:old('Telefono') }}" id="Telefono">
       
   </div> --}}

<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo"
        value="{{ isset($centro->Correo) ? $centro->Correo : old('Correo') }}" id="Correo">
</div>
<br />
<input class="btn btn-success " type="submit" value="{{ $modo }} Datos">
<a class="btn btn-primary" href="{{ url('admin/centers/') }}">Regresar</a>
<br>
