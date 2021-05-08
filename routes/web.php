<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentosController;

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
Route::get('/documentos', [DocumentosController::class, 'index']);
Route::get('/documentos/cadastrar', [DocumentosController::class, 'create']);
Route::post('/documentos/cadastrar', [DocumentosController::class, 'store']);
Route::delete('/documentos/{id}', [DocumentosController::class, 'destroy']);
Route::get('/documentos/{id}/editar', [DocumentosController::class, 'edit']);
Route::put('/documentos/{id}', [DocumentosController::class, 'update']);