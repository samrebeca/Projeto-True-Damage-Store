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

//rota inicial
Route::get('/' , 'App\Http\Controllers\web\HomeController@home')->name("home");

//rota relacionada ao id do produto
Route::get('/produto/{id}', 'HomeController@produto')->name('produto');

//rotas do carrinho
Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('index');
});
//continuação de rotas para o carrinho (usuário)
Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');
Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover');
Route::post('/carrinho/concluir', 'CarrinhoController@concluir')->name('carrinho.concluir');
Route::get('/carrinho/compras', 'CarrinhoController@compras')->name('carrinho.compras');
Route::post('/carrinho/cancelar', 'CarrinhoController@cancelar')->name('carrinho.cancelar');

//rota dos produtos
Route::get("/produtos/acessorio", "App\Http\Controllers\web\AcessoriosController@acessorio")->name("acessorio");
Route::get("/produtos/almofada", "App\Http\Controllers\web\AlmofadasController@almofada")->name("almofada");
Route::get('produtos/boneco' , 'App\Http\Controllers\web\BonecosController@boneco')->name("boneco");
Route::get('produtos/camiseta' , 'App\Http\Controllers\web\CamisetasController@camiseta')->name("camiseta");
Route::get('produtos/caneca' , 'App\Http\Controllers\web\CanecasController@caneca')->name("caneca");
Route::get('produtos/moletom' , 'App\Http\Controllers\web\MoletonsController@moletom')->name("moletom");
Route::get('produtos/mousepad' , 'App\Http\Controllers\web\MousepadsController@mousepad')->name("mousepad");
Route::get('produtos/placa' , 'App\Http\Controllers\web\PlacasController@placa')->name("placa");

//rota de login e cadastro
Route::get('/login' , 'App\Http\Controllers\web\LoginsController@login')->name("login");
Route::get('/cadastro' , 'App\Http\Controllers\web\CadastrosController@cadastro')->name("cadastro");

//rota de pagamento
Route::get('/pagamento' , 'App\Http\Controllers\PagamentosController@pagamento')->name("pagamento");

//rotas do admin do sistema
Route::get('/adicionar' , 'App\Http\Controllers\AdicionarsController@adicionar')->name("adicionar");
Route::get('/addproduto' , 'App\Http\Controllers\AddProdutosController@addproduto')->name("addproduto");
Route::get('/visucliente' , 'App\Http\Controllers\VisuClientesController@visucliente')->name("visucliente");
Route::get('/editarcliente' , 'App\Http\Controllers\EditarClientesController@editarcliente')->name("editarcliente");
Route::get('/editarproduto' , 'App\Http\Controllers\EditarProdutosController@editarproduto')->name("editarproduto");