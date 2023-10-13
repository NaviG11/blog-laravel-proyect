<h1>{{ $modo }} Eventos </h1>
   @if(count($errors)>0)
       <div class="alert alert-danger" role="alert">
          <ul>
          @foreach($errors->all() as $error)
           <li>{{$error}}</li>
           @endforeach
          </ul>
       </div>      
   @endif

   <div class="form-group">

       <label for="Nombre">Nombre</label>
       <input type="text" class="form-control" name="Nombre" value="{{ isset($evento->Nombre)?$evento->Nombre:old('Nombre')}}" id="Nombre">
      
   </div>

   <div class="form-group">
       <label for="Imagen">Imagen</label>
       @if(isset($evento->Imagen))
       <img  class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$evento->Imagen}}" width="100" alt="">
       @endif
       <input type="file" class="form-control" name="Imagen" value="" id="Imagen">
       
   </div>


   <div class="form-group">
       <label for="Descripcion">Descripcion</label>
       <input type="text"  class="form-control"  name ="Descripcion" value="{{ isset($evento->Descripcion)?$evento->Descripcion:old('Descripcion') }}" id ="Descripcion">
      
   </div>

   <div class="form-group">
       <label for="Lugar">Lugar</label>
       <input type="text" class="form-control" name="Lugar"  value="{{ isset($evento->Lugar)?$evento->Lugar:old('Lugar') }}"id="Lugar">
       
   </div>

   <div class="form-group">
       <label for="Fecha">Fecha</label>
       <input type="date" class="form-control" name="Fecha" value="{{ isset($evento->Fecha)?$evento->Fecha:old('Fecha') }}" id="Fecha">
       
   </div>

   {{-- <div class="form-group">
       <label for="Hora">Hora</label>
       <input type="time" class="form-control" name="Hora" value="{{ isset($evento->Hora)?$evento->Hora:old('Hora') }}" id="Hora">
   </div> --}}

   <div class="form-group">
       <label for="Link">Link</label>
       <input type="text" class="form-control" name="Link" value="{{ isset($evento->Link)?$evento->Link:old('Link') }}" id="Link">
       
   </div>

   

   <br/>

   <input class="btn btn-success " type="submit"  value="{{$modo}} Datos">

  
   <a  class="btn btn-primary" href="{{ url('admin/evento/') }}" >Regresar</a>

   <br>