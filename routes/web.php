<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//MIDLEWARE
Route::middleware('auth')->group(function(){
    //TODOLIST
//Route::resource('/todo', 'TodoController');
    Route::get('/todos', "TodoController@index")->name('todo.index');


    Route::get('/todos/create', "TodoController@create")->name('todo.create');
    Route::post('/todos/create', "TodoController@store")->name('todo.store');


    Route::get('/todos/{id}/edit', "TodoController@edit")->name('todo.edit');

    Route::post('/todos/{id}/update', "TodoController@update")->name('todo.update');
    Route::get('/todos/{id}/destroy', "TodoController@destroy")->name('todo.destroy');
//TODOLIST
});
//MIDDLEWARE


Route::get('/user', 'UserController@index');
Route::post('/upload','UserController@uploadAvatar');













Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
