<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route::get('autors', function () {
    return view('autors');
});

Route::resource('articles', ArticleController::class);

Route::get('articles-categoryes', function () {
    return view('atriclesCategory');
});

// Выборки статей
// по категории
Route::get(
    'articles-categoryes/all/{slug}',
    [\App\Http\Controllers\Api\ArticlesCategoryController::class, 'articles']
)->name('articles_from_cat');
//По автору
Route::get(
    '/autors/all/{slug}',
    [\App\Http\Controllers\Api\AutorController::class, 'articles']
)->name('articles_from_autor');
