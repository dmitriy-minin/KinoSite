@extends('layouts.admin')

@section('content')
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