@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div>
  <h3>Задание</h3><br>
<dl class="row">
  <dt class="col-sm-3">Создать 3 миграции в БД:</dt>
  <dd class="col-sm-9"><p>Таблица “Жанры” с полями: ID, Название жанра;</p>
  <p>Таблица "Фильмы" с полями : ID, Название фильма, Статус публикации, Ссылка на постер;</p>
  <p>Таблица связи фильмы с жанрами;</p>
  <p>Создать seeds для тестового заполнения вышеуказанных таблиц;</p></dd>

  <dt class="col-sm-3"></dt>
  <dd class="col-sm-9">
    <p>Создать модели, контроллеры, для создания, вывода, редактирования и удаления записей.</p>
    <p> При создании записи в таблицу фильмы, должна происходить загрузка изображения с постером фильма ( если изображение отсутствует, к записи должно прикрепляться дефолтное изображение ). Так же фильм не должен быть опубликован, публикация записи должна быть предусмотрена отдельным методом.</p>
  </dd>

  <dt class="col-sm-3">Создать контроллеры REST API для выборки и пагинации данных в формате json:</dt>
  <dd class="col-sm-9"><p>жанры ( выводит список всех жанров);</p>
<p>жанры/id (выводит список всех фильмов в данном жанре с разбивкой на страницы);</p>
<p>фильмы ( выводит все фильмы с разбивкой на страницы );</p>
<p>фильмы/id ( выводит определенный фильм по ID );</p>
<p>Фильм всегда в себе должен содержать жанры к которым относится и ссылку на изображение.</p></dd>

  <dt class="col-sm-3 text-truncate"></dt>
  <dd class="col-sm-9"><p>Внимание в контроллерах должно быть минимальное количество логики. Все входящие по реквесту данные должны быть отвалидированы, особенно файлы !</p></dd>

  
</dl>
</div>
@endsection