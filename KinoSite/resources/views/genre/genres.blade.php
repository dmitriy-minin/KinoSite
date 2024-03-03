@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Жанр</th>
      <th scope="col">Создано</th>
      <th scope="col">Обновлено</th>
    </tr>
  </thead>
  <tbody>
    @foreach($genres as $genre)
    <tr>
      <th scope="row">{{$genre->id}}</th>
      <td>{{$genre->genre}}</td>
      <td>{{$genre->created_at}}</td>
      <td>{{$genre->updated_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection