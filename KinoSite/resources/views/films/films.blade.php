@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/filmsStyles.css">

<div class="buttons">
<a href="{{route('films_create')}}">
<button type="button" class="btn btn-primary">Добавить</button></a>
  <a href="{{route('films_table')}}">
<button type="button" class="btn btn-outline-dark">Сетка</button></a>
</div>
<div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Фильм</th>
      <th scope="col">Постер</th>
      <th scope="col">Добавлено</th>
    </tr>
  </thead>
  <tbody>
    @foreach($films as $film)
    <tr>
      <th scope="row">{{$film->id}}</th>
      <td>{{$film->film_name}}</td>
      <td>{{$film->poster_link}}</td>
      <td>{{$film->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="pagination">
{!! $films->links('pagination::bootstrap-4') !!}
  </div>
@endsection