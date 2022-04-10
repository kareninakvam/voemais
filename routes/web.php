<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui ficam todas as rotas do sistema. 
|
*/

Route::get('/', [CadastroController::class, 'index'])->middleware('auth');

// Rotas relacionadas aos clientes
Route::get('/clientes/cadastrar', [CadastroController::class, 'adicionarClientes']);
Route::get('/clientes/{id}', [CadastroController::class, 'show']);
Route::post('/clientes', [CadastroController::class, 'store']);
Route::delete ('/clientes/{id}',[CadastroController::class, 'destroy']);
Route::get('/clientes/edit/{id}',[CadastroController::class, 'edit']);
Route::put('/clientes/update/{id}',[CadastroController::class, 'update']);


//Rotas relacionadas às viagens
Route::get('/viagens/cadastrar', [CadastroController::class, 'adicionarViagens']);
Route::post('/viagem/cadastrar', [CadastroController::class, 'storeViagens']);
Route::delete ('/viagens/{id}',[CadastroController::class, 'destroyViagens']);
Route::put('/viagens/update/{id}',[CadastroController::class, 'updateViagens']);
Route::get('/viagens/edit/{id}',[CadastroController::class, 'editViagens']);

    
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
