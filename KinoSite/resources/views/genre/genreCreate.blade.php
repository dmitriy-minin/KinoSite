@extends('layouts.main')
@section('content')

<link rel="stylesheet" href="css/filmCreate.css">

<form class="createform" action="{{route('genre_store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Название жaнра</label>
    <input type="text" class="form-control" placeholder="Введите название" name="genre">
    @error('genre')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
<br><button type="submit" class="btn btn-primary">Добавить</button>

</form>

<form action="{{route('genres_table')}}">
    <br><button type="submit" class="btn btn-primary">Отмена</button>
    </form>
@endsection