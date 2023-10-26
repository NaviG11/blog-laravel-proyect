<div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" name="title" value="{{ isset($video->title) ? $video->title : old('title') }}" id="title" placeholder="title">
</div>
<div class="form-group">
    <label for="description">Descripcion</label>
    <input type="text" class="form-control" name="description" value="{{ isset($video->description) ? $video->description : old('description') }}"  id="description" placeholder="description">
</div>
<div class="form-group">
    <label for="video_url">Url</label>
    <input type="text" class="form-control" name="video_url" value="{{ isset($video->video_url) ? $video->video_url : old('video_url') }}" id="video_url" placeholder="video url -> embled">
</div>
<div class="form-group">
    <label for="type">Tipo</label>
    <input type="text" class="form-control" name="type" value="{{ isset($video->type) ? $video->type : old('type') }}" id="type" placeholder="type">
</div>

<button type="submit" class="btn btn-primary">Guardar datos</button>

<a class="btn btn-primary" href="{{ url('video') }}">Regresar</a>
<br>