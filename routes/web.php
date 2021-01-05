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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'ProductController@index'); //afisare lista sarcini pe pagina de start
Route::resource('products', 'ProductController');// Ruta de resurse va genera CRUD URI, un controller de tip resource ce va crea un fisier cu functii definite pt create, delete, update
