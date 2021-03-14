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
Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/' , 'App\Http\Controllers\web\HomeController@home');
//Route::get('/acessorio' , 'App\Http\Controllers\web\AcessoriosController@acessorio');
Route::get('/almofada' , 'App\Http\Controllers\web\AlmofadasController@almofada');
Route::get('/boneco' , 'App\Http\Controllers\web\BonecosController@boneco');
Route::get('/camiseta' , 'App\Http\Controllers\web\CamisetasController@camiseta');
Route::get('/caneca' , 'App\Http\Controllers\web\CanecasController@caneca');
Route::get('/livro' , 'App\Http\Controllers\web\LivrosController@livro');
Route::get('/mousepad' , 'App\Http\Controllers\web\MousepadsController@mousepad');
Route::get('/placa' , 'App\Http\Controllers\web\PlacasController@placa');




Route::get("/acessorio", "App\Http\Controllers\web\AcessoriosController@acessorio")->name("acessorio");
