<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoProdutoController;

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

Route::resource('tipoproduto', "TipoProdutoController");
// Route::get("tipoprodutos/create","TipoProdutoController@create")->name("tipoproduto.create");
// Route::post("tipoprodutos","TipoProdutoController@store")->name("tipoproduto.store");
Route::resource('produto', "ProdutoController");
