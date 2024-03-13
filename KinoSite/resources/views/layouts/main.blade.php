<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js')}}" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js')}}" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/topmenuStyles.css')}}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('main_page')}}">Kinofilm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('main_page')}}">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('genres_table')}}">Жанры</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('films_table')}}">Фильмы</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>