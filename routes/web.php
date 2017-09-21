<?php

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
    return view('layouts/index');
});
Route::get('/talleres', function () {
    return view('layouts/talleres');
});
Route::get('/taller/logicaproposicional', function () {
    return view('talleres/one');
});
Route::get('/taller/algebrabooleana', function () {
    return view('talleres/two');
});
Route::get('/taller/conjuntos', function () {
    return view('talleres/three');
});
Route::get('/taller/grafos', function () {
    return view('talleres/four');
});
Route::get('/aplicacion', function () {
    return view('layouts/application');
});
