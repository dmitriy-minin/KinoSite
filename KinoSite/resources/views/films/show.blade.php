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
    <h2>{{$film->film_name}}</h2>
    @foreach($genres as $genre)
        <h3>{{$genre}}</h3>
    @endforeach
    <img class="poster" src="{{$film->poster_link}}" alt="poster">
    <form action="{{route('films_table')}}">
    <br><button type="submit" class="btn btn-primary">Назад</button>
    </form>
@endsection