@extends('layouts.main')
@section('content')

<link rel="stylesheet" href="css/filmCreate.css">

<form class="createform" action="{{route('film_update', $film->id)}}" method="post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="exampleInputEmail1">Название фильма</label>
    <input type="text" class="form-control" placeholder="Введите название" name="film_name" value="{{$film->film_name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ссылка на постер</label>
    <input type="text" class="form-control" placeholder="Постер" name="poster_link" value="{{$film->poster_link}}">
  </div>
  <select class="form-select" multiple aria-label="multiple select example" name="genres[]">
    @foreach($genres as $genre)
    <option
    @foreach($film->genres as $fimlGenre) 
    {{$genre->id === $fimlGenre->id ? 'selected' : ''}}
    @endforeach
    value="{{$genre->id}}">{{$genre->genre}}</option>
    @endforeach
</select>
  <br><button type="submit" class="btn btn-primary">Обновить</button>
</form>
@endsection