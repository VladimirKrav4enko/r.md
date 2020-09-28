<?php

use Illuminate\Support\Facades\Route;

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

Route::get(
    '/',
    function () {
        return redirect()->route('vacancy-index');
    }
);

Route::get(
    '/vacancy/show/{id}',
    'VacancyController@show'
)->name('vacancy-show');

Route::get(
    '/vacancy/list',
    'VacancyController@index'
)->name('vacancy-index');
