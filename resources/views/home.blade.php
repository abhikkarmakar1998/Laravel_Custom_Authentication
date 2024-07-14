<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

      <nav class="navbar navbar-light bg-light justify-content-between">
      <h1 class="navbar-brand px-4">Logo</h1>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        @method('DELETE')
        <div style="padding-right: 30px;">
        <button class="btn btn-danger my-2 my-sm-0">Logout</button>
        </div>
      </form>
    </nav>

    <h4 class="px-4 py-4">Welcome, {{ Auth::user()->name }}</h4>
    
  </body>
</html>