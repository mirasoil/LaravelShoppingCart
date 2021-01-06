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

//in momentul accesarii paginii, implicit vom fi redirectati pe pagina de home
//     Route::get('/', 'HomeController@index')->name('home');
//     Auth::routes();
//daca suntem logati, vom fi redirectati pe pagina de home care este list.blade.php din ProductController
//     Route::group(['middleware'=>'auth'], function(){ 

//             Route::get('/home', 'ProductController@index'); //afisare lista sarcini pe pagina de start
//             Route::resource('products', 'ProductController');// Ruta de resurse va genera CRUD URI, un controller de tip resource ce va crea un fisier cu functii definite pt create, delete, update
//      });

// Route::get('admin_area', ['middleware' => 'admin', function () {
//     //
// }]);

// Route::get('admin/profile', function () {
//     Route::get('/', 'ProductController@index'); //afisare lista sarcini pe pagina de start
//     Route::resource('products', 'ProductController');
//     })->middleware('admin');

Route::get('/products', 'ProductController@index');
Route::resource('products', 'ProductController');
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

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/admin', 'admin');
    Route::view('/user', 'user');



