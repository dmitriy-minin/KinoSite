@extends('layouts.main')
@section('content')

<link rel="stylesheet" href="css/filmCreate.css">

<form class="createform" action="{{route('film_store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Название фильма</label>
    <input type="text" class="form-control" placeholder="Введите название" name="film_name" value="{{old('film_name')}}">
    @error('film_name')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ссылка на постер</label>
    <input type="text" class="form-control" placeholder="Постер" name="poster_link" value="{{old('poster_link')}}">
    @error('poster_link')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <select class="form-select" multiple aria-label="Multiple select example" name="genres[]">
    @foreach($genres as $genre)
    <option 
    {{old('genres') != null && in_array($genre->id, old('genres')) ? 'selected' : ''}}
    value="{{$genre->id}}">{{$genre->genre}}</option>
    @endforeach
  </select>
  @error('genres')
  <p class="text-danger">{{$message}}</p>
  @enderror
<br><button type="submit" class="btn btn-primary">Добавить</button>

</form>
@endsection