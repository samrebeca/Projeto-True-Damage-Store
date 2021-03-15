<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/produtos', function(Request $request){
	return $request->select;
})->name('produtos');

Route::get('/' , 'App\Http\Controllers\web\HomeController@home')->name("home");
Route::get("/produtos/acessorio", "App\Http\Controllers\web\AcessoriosController@acessorio")->name("acessorio");
Route::get("/produtos/almofada", "App\Http\Controllers\web\AlmofadasController@almofada")->name("almofada");
Route::get('produtos/boneco' , 'App\Http\Controllers\web\BonecosController@boneco')->name("boneco");
Route::get('produtos/camiseta' , 'App\Http\Controllers\web\CamisetasController@camiseta')->name("camiseta");
Route::get('produtos/caneca' , 'App\Http\Controllers\web\CanecasController@caneca')->name("caneca");
Route::get('produtos/livro' , 'App\Http\Controllers\web\LivrosController@livro')->name("livro");
Route::get('produtos/mousepad' , 'App\Http\Controllers\web\MousepadsController@mousepad')->name("mousepad");
Route::get('produtos/placa' , 'App\Http\Controllers\web\PlacasController@placa')->name("placa");
Route::get('/login' , 'App\Http\Controllers\web\LoginsController@login')->name("login");
Route::get('/cadastro' , 'App\Http\Controllers\web\CadastrosController@cadastro')->name("cadastro");
Route::get('/pagamento' , 'App\Http\Controllers\PagamentosController@pagamento')->name("pagamento");
