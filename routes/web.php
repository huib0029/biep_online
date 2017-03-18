<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    if(Auth::user()){
        return view('home');
    }else{
        return view('welcome');
    }
});

Route::resource ( 'bookadd', 'BookaddController');
Route::resource ( 'registerbooks', 'RegisterbooksController');
Route::resource ( 'allstudents', 'AllstudentsController');
Route::resource ( 'approvestudents', 'ApprovestudentsController');
Route::resource ( 'returnbooks', 'ReturnbooksController');
Route::resource ( 'issuedbooks', 'IssuedbooksController');

Route::resource ( 'books', 'BookController');

Route::post('books/add',
    ['as' => 'books_store', 'uses' => 'BookController@store']);


Auth::routes();

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/home', ['as' => 'index','uses' => 'HomeController@index']);
});
