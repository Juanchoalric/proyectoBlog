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
    return view('welcome');
});

Route::get("/index", "ViewsController@index");
Route::get("/recipe_index","ViewsController@recipeIndex");
Route::get("/about","ViewsController@about");
Route::get("/categoria","ViewsController@categoria");
Route::get("/recipe","ViewsController@recipe");
Route::get("/register","ViewsController@register");
