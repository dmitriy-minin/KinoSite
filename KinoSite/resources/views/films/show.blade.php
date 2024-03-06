@extends('layouts.main')
@section('content')
    <style>
        .poster{
            width: 30%;
        }
    </style>
    <a href="{{route('film_edit', $film->id)}}">Редактировать</a><br>
    <form action="{{route('film_delete', $film->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Удалить">
    </form>
    <h2>{{$film->film_name}}</h2>
    <img class="poster" src="{{$film->poster_link}}" alt="poster"><br>
    <a href="{{route('films_table')}}">Назад</a>
@endsection