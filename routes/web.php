<?php
 
use Illuminate\Support\Facades\Route;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
Route::get('cadastrar',[\App\Http\Controllers\cadastrarUsuario::class,'index']);
Route::post('/cadastrar/salvar',[\App\Http\Controllers\cadastrarUsuario::class, 'store']);

Route::get('adicionar',[\App\Http\Controllers\cadastrarTarefa::class,'index']);
Route::post('/adicionar/salvar',[\App\Http\Controllers\cadastrarTarefa::class, 'store']);

Route::get('index', function(){
    return view('paginas/index');
});
