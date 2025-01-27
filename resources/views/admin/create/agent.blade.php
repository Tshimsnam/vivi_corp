<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <form action="{{route('agents.store')}} " method="POST" enctype="multipart/form-data">
      @csrf
      <label for="name">Nom :</label>
      <input type="text" name="name" id="name" required>
      <br>
      <label for="prenom">Prénom :</label>
      <input type="text" name="prenom" id="prenom" required>
      <br>
      <label for="fonction">Fonction :</label>
      <input type="text" name="fonction" id="fonction" required>
      <br>
      <label for="facebook">Facebook :</label>
      <input type="text" name="facebook" id="facebook">
      <br>
      <label for="tweeter">Twitter :</label>
      <input type="text" name="tweeter" id="twitter">
      <br>
      <label for="linkedin">LinkedIn :</label>
      <input type="text" name="linkedin" id="linkedin">
      <br>
      <label for="whatsapp">WhatsApp :</label>
      <input type="text" name="whatsapp" id="whatsapp">
      <br>
      <label for="image">Image :</label>
      <input type="file" name="image" id="image">
      <br>
      <input type="submit" value="Enregistrer">
  </form>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>