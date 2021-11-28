<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('autors', 'App\Http\Controllers\Api\AutorController')->names('restAutor');
Route::resource('articles-categoryes', 'App\Http\Controllers\Api\ArticlesCategoryController')->names('restArtCategory');
Route::resource('articles', 'App\Http\Controllers\Api\ArticlesController')->names('restArticles');
