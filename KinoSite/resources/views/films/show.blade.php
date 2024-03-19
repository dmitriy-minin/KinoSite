@extends('layouts.main')
@section('content')
    <style>
        .poster{
            width: 30%;
        }
    </style>
    <form action="{{route('film_edit', $filmsgenres[0]->id)}}">
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form><br>
    <form action="{{route('film_delete', $filmsgenres[0]->id)}}" method="post">
        @csrf
        @method('delete')
        <form action="">
            <button type="submit" class="btn btn-danger" value="Удалить">Удалить</button>
        </form>
    </form>
    <h2>Название фильма:  {{$filmsgenres[0]->film_name}}</h2>
    <div>
        <p>Жанры: </p>
    @foreach($filmsgenres as $item)
    <div class="badge bg-primary text-wrap" style="width: 6rem; font-size: 1rem; color: white">
        {{$item->genre}}
    </div>
    @endforeach
    </div>
    <br><img class="poster" src="{{$filmsgenres[0]->poster_link}}" alt="poster">
    <form action="{{route('films_table')}}">
    <br><button type="submit" class="btn btn-primary">Назад</button>
    </form>
@endsection