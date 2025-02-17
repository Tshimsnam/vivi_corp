<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <form method="POST" action="{{route('services.store')}}">
      @csrf

      <div>
          <label for="icon">image:</label>
          <input type="text" id="icon" name="icon" required>
      </div>

      <div>
          <label for="title">Title:</label>
          <input type="text" id="title" name="title" required>
      </div>

      <div>
          <label for="content">Content:</label>
          <textarea id="content" name="content" required></textarea>
      </div>

      <button type="submit">Submit</button>
  </form>
<h1>Hello, world!</h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
