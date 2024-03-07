<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Films\IndexController;

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

Route::group(['namespace'=> 'Films'], function(){       // т.к. однометодные контроллеры в папке Films нужно добывить пространство имен
    Route::get('/films', 'IndexController')->name('films_table');
    Route::get('/films/cards', 'CardsController')->name('films_cards');
    Route::get('/films/create', 'CreateController')->name('films_create');
    Route::post('/films/create', 'StoreController')->name('film_store');
    Route::get('/films/{film}', 'ShowController')->name('film_show');
    Route::get('/films/{film}/edit', 'EditController')->name('film_edit');
    Route::patch('/films/{film}', 'UpdateController')->name('film_update');
    Route::delete('/films/{film}', 'DeleteController')->name('film_delete');
});

Route::group(['namespace'=>'Genres'], function(){
    Route::get('/genres', 'IndexController')->name('genres_table');  
    Route::delete('/genres/{genre}', 'DeleteController')->name('genres_delete');
    Route::get('/genres/create', 'CreateController')->name('genres_create');
    Route::post('/genres/create', 'StoreController')->name('genre_store');
    Route::get('/genres/{genre}/edit', 'EditController')->name('genre_edit');
    Route::patch('/genres/{film}/edit', 'UpdateController')->name('genre_update');    
});

//Route::get('/main', '');

//Route::get('/genres', 'GenresController@index')->name('genres_table');

//Route::get('/films', 'FilmsController@index')->name('films_table');
//Route::get('/films/cards', 'FilmsController@cards')->name('films_cards');

//Route::get('/films/create', 'FilmsController@create')->name('films_create');
//Route::post('/films/create', 'FilmsController@store')->name('film_store');

//Route::get('/films/{film}', 'FilmsController@show')->name('film_show');

//Route::get('/films/{film}/edit', 'FilmsController@edit')->name('film_edit');
//Route::patch('/films/{film}', 'FilmsController@update')->name('film_update');
//Route::delete('/films/{film}', 'FilmsController@destroy')->name('film_delete');


//Route::get('/films/delete', 'FilmsController@delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
