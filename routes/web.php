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

Route::view('/', 'welcome');
    Auth::routes();

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/user', 'Auth\LoginController@showUserLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/user', 'Auth\LoginController@userLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/user', 'Auth\RegisterController@createUser');

    Route::view('/home', 'home')->middleware('auth'); //pagina home e vizibila doar daca sunt logat
    Route::view('/admin', 'admin')->middleware('auth:admin'); //pagina de admin e vizibila doar pentru admini
    Route::view('/user', 'user')->middleware('auth:user'); //pagina de useri (dashboard-ul cu Hi awesome user) e vizibil doar pentru useri, dupa logare sunt redirectionati aici
    
    //CRUD pe cos - accesibil doar pentru useri
    Route::patch('update-cart', 'ShopsController@update')->middleware('auth:user'); //modific cos (doar pentru useri)
    Route::delete('remove-from-cart', 'ShopsController@remove')->middleware('auth:user');  //sterg din cos

    Route::get('/shop', 'ShopsController@index')->middleware('auth:user');  //afisare pagina de start
    Route::get('cart', 'ShopsController@cart')->middleware('auth:user');  //cos
    Route::get('add-to-cart/{id}', 'ShopsController@addToCart')->middleware('auth:user');  //adaug in cos
    Route::patch('update-cart', 'ShopsController@update')->middleware('auth:user');  //modific cos
    Route::delete('remove-from-cart', 'ShopsController@remove')->middleware('auth:user'); //sterg din cos

    //CRUD pe products, doar adminii au acces la pagina de modificare produse in baza de date
    Route::GET('/products', 'ProductController@index')->middleware('auth:admin');
    Route::resource('products', 'ProductController')->middleware('auth:admin');

