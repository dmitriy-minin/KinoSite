@extends('layouts.main')
@section('content')
    <style>
        .poster{
            width: 30%;
        }
    </style>
    <form action="{{route('film_edit', $film->id)}}">
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form><br>
    <form action="{{route('film_delete', $film->id)}}" method="post">
        @csrf
        @method('delete')
        <form action="">
            <button type="submit" class="btn btn-danger" value="Удалить">Удалить</button>
        </form>
    </form>
    <h2>Название фильма:  {{$film->film_name}}</h2>
    <div>
        <p>Жанры: </p>
    @foreach($genres as $genre)
        @foreach($filmsgenres as $item)
            @if($genre->id == $item->genre_id)
            <div class="badge bg-primary text-wrap" style="width: 6rem; font-size: 1rem; color: white">
            {{$genre->genre}}
            </div>
            @endif
        @endforeach
    @endforeach
    </div>
    <br><img class="poster" src="{{$film->poster_link}}" alt="poster">
    <form action="{{route('films_table')}}">
    <br><button type="submit" class="btn btn-primary">Назад</button>
    </form>
@endsection