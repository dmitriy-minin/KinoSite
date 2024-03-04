<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mainPage.mainPage');
})->name('main_page');

//Route::get('/main', '');

Route::get('/genres', 'GenresController@index')->name('genres_table');


Route::get('/films', 'FilmsController@index')->name('films_table');
Route::get('/filmscards', 'FilmsController@cards')->name('films_cards');
Route::get('/filmcreate', 'FilmsController@create')->name('films_create');
Route::post('/filmcreate', 'FilmsController@store')->name('film_store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
