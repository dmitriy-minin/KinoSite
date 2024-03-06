@extends('layouts.main')
@section('content')

<link rel="stylesheet" href="css/filmCreate.css">

<form class="createform" action="{{route('film_store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Название фильма</label>
    <input type="text" class="form-control" placeholder="Введите название" name="film_name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ссылка на постер</label>
    <input type="text" class="form-control" placeholder="Постер" name="poster_link">
  </div>
  <select class="form-select" multiple aria-label="multiple select example" name="genres[]">
    @foreach($genres as $genre)
    <option value="{{$genre->id}}">{{$genre->genre}}</option>
    @endforeach
</select>
<br><button type="submit" class="btn btn-primary">Добавить</button>
</form>
@endsection