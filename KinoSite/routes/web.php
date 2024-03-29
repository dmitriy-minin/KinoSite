<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Film;

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

Route::get('/home', 'HomeController@index');

// Route::group(['namespace'=> 'Admin\Film', 'prefix'=>'admin'], function(){
//     Route::group([], function(){
//         Route::get('/filmstable', 'IndexController')->name('admin_film_index');
//         Route::get('/filmscards', 'CardsController')->name('admin_film_cards');
//     });
// });

Route::group(['namespace'=> 'Films'], function(){      
    Route::get('/', 'MainController')->name('main_page');
    Route::get('/films', 'IndexController')->name('films_table');
    Route::get('/films/cards', 'CardsController')->name('films_cards');
    Route::get('/films/create', 'CreateController')->name('films_create');
    Route::post('/films/create', 'StoreController')->name('film_store');
    Route::get('/films/{film}', 'ShowController')->name('film_show');
    Route::get('/films/{film}/edit', 'EditController')->name('film_edit');
    Route::patch('/films/{film}', 'UpdateController')->name('film_update');
    Route::delete('/films/{film}', 'DeleteController')->name('film_delete');
    Route::get('/films/{film}/public', 'PublicController')->name('film_public');
    Route::patch('/films/{film}/public', 'PublishController')->name('film_publish');
});

Route::group(['namespace'=>'Genres'], function(){
    Route::get('/genres', 'IndexController')->name('genres_table');  
    Route::delete('/genres/{genre}', 'DeleteController')->name('genres_delete');
    Route::get('/genres/create', 'CreateController')->name('genres_create');
    Route::post('/genres/create', 'StoreController')->name('genre_store');
    Route::get('/genres/{genre}/edit', 'EditController')->name('genre_edit');
    Route::patch('/genres/{genre}/edit', 'UpdateController')->name('genre_update');
    Route::get('/genres/{genre}/films', 'ShowController')->name('genre_films');    
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
