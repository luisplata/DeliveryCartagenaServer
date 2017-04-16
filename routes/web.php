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
    return view('login');
});
Route::post('/login', 'UserController@Autenticar');
Route::get("/inicio",function(){
	return view("inicio");
});


//Productos
Route::get('/producto', 'ProductoController@index');
Route::post('/producto/nuevo/crear', 'ProductoController@store');
Route::get('/producto/nuevo', "ProductoController@create");
//Api
Route::resource("/productos","ProductosController");
Route::resource("/categorias","CategoriasController");
//Route::resource("/categorias","CategoriasController");

//Categorias
Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/nuevo/crear', 'CategoriaController@store');
Route::get('/categoria/nuevo', "CategoriaController@create");
//Api

