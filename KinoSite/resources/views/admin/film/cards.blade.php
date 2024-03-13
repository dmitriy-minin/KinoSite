@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="css/cardsStyles.css">

<div class="buttons">
<a href="{{route('films_create')}}">
<button type="button" class="btn btn-primary">Добавить</button></a>
  <a href="{{route('admin_film_index')}}">
<button type="button" class="btn btn-outline-dark">Список</button></a>
</div>
<div class="cards">
@foreach($films as $film)
<a href="{{route('film_show', $film->id)}}">
    <div class="card" style="width: 12rem;">
    <img class="card-img-top" src="{{$film->poster_link}}" alt="постер фильма">
        <div class="card-body">
        <h5 class="card-title">{{$film->film_name}}</h5>
      </a>
        <p class="card-text">{{$film->created_at}}</p>
        <a href="{{route('film_edit', $film->id)}}" class="btn btn-primary">Редактировать</a>
        </div>
    </div>
@endforeach
</div>
<div class="pagination">
{!! $films->links('pagination::bootstrap-4') !!}
  </div>
@endsection