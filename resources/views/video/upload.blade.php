<form action="{{ route('upload.video') }}" method="POST">
    @csrf
    <label for="video_url">Enlace del Video:</label>
    <input type="text" name="video_url" required>
    <label for="title">Título:</label>
    <input type="text" name="title" required>
    <label for="description">Descripción:</label>
    <textarea name="description"></textarea>
    <button type="submit">Subir Video</button>
</form>
