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

Route::get('/', [CadastroController::class, 'index']);

Route::get('/clientes/cadastrar', [CadastroController::class, 'adicionarClientes'] );

Route::get('/cadastrar-viagem', [CadastroController::class, 'adicionarViagens'] );

Route::get('/clientes/{id}', [CadastroController::class, 'show']);

Route:: post ('/clientes', [CadastroController::class, 'store']);
