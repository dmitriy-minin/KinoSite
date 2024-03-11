@extends('layouts.main')
@section('content')
<form action="{{route('film_publish', $film->id)}}" method="post">
  @csrf
  @method('patch')
<div class="form-check">
  <br><input class="form-check-input" type="checkbox" id="flexCheckDefault" name="public_status"
  {{$film->public_status === 1 ? 'checked' : ''}}>
  <label class="form-check-label" for="flexCheckDefault">
    статус публикации
  </label>
</div>
<br><button type="submit" class="btn btn-primary">Обновить</button>
</form>
<form action="{{route('film_edit', $film->id)}}">
  <br><button type="submit" class="btn btn-secondary">Отмена</button>
</form>
@endsection