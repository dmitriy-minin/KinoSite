@extends('layouts.main')
@section('content')

<link rel="stylesheet" href="css/filmCreate.css">

<form class="createform" action="{{route('genre_update', $genres->id)}}" method="post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="exampleInputEmail1">Название жанра</label>
    <input type="text" class="form-control" placeholder="Введите название" name="genre" value="{{$genres->genre}}">
  </div>
  <br><button type="submit" class="btn btn-primary">Обновить</button>
</form>
<form action="{{route('genres_table')}}">
    <br><button type="submit" class="btn btn-secondary">Отмена</button>
    </form>
@endsection