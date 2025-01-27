<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="{{ $about->title }}" required>
      
        <label for="content">Contenu :</label>
        <textarea name="content" id="content" required>{{ $about->content }}</textarea>
      
        <label for="image">Image :</label>
        <input type="file" name="image" id="image">
        @if ($about->image)
            <div style="max-width: 300px; max-height: 300px;">
                <img src="{{ asset('assets/uploads/abouts/'.$about->image) }}" alt="Image actuelle" style="width: 100%; height: 100%; object-fit: cover;">
            </div> <br>
        @else
            <p>Aucune image actuelle.</p>
        @endif
      
        <label for="number">Numéro :</label>
        <input type="number" name="number" id="number" value="{{ $about->number }}" required>
      
        <input type="submit" value="Modifier">
      </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>