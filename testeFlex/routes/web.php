<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\administradorController;
use App\Http\Controller\clienteController;
use App\Http\Controller\professorController;
use App\Http\Controller\videoController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/cadastrar', function () {
    return view('paginas/cadastrar');
});

Route::get('/consultar', function () {
    return view('paginas/consultar');
});

Route::get('/editar', function () {
    return view('paginas/editar');
});

Route::get('/cadastrar/salvar', [App\Http\Controllers\clienteController::class,'store']);

Route::get('/consultar', [App\Http\Controllers\clienteController::class,'consultar']);

Route::get('/editar/{id}', [App\Http\Controllers\clienteController::class,'editar']);

Route::get('/atualizar/{id}', [App\Http\Controllers\clienteController::class,'atualizar']);

Route::get('/excluir/{id}', [App\Http\Controllers\clienteController::class,'excluir']);

//professor

Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/cadastrarProfessor', function () {
    return view('paginas/cadastrarProfessor');
});

Route::get('/consultarProfessor', function () {
    return view('paginas/consultarProfessor');
});

Route::get('/editarProfessor', function () {
    return view('paginas/editarProfessor');
});

Route::get('/cadastrarProfessor/salvar', [App\Http\Controllers\professorController::class,'store']);

Route::get('/consultarProfessor', [App\Http\Controllers\professorController::class, 'consultar']);

Route::get('/editarProfessor/{id}', [App\Http\Controllers\professorController::class,'editarProfessor']);

Route::get('/atualizarProfessor/{id}', [App\Http\Controllers\professorController::class,'atualizarProfessor']);

Route::get('/excluirProfessor/{id}', [App\Http\Controllers\professorController::class,'excluirProfessor']);


//administrador

Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/cadastrarAdministrador', function () {
    return view('paginas/cadastrarAdministrador');
});

Route::get('/consultarAdministrador', function () {
    return view('paginas/consultarAdministrador');
});

Route::get('/editarAdministrador', function () {
    return view('paginas/editarAdministrador');
});

Route::get('/cadastrarAdministrador/salvar', [App\Http\Controllers\administradorController::class,'store']);

Route::get('/consultarAdministrador', [App\Http\Controllers\administradorController::class,'consultarAdministrador']);

Route::get('/editarAdministrador/{id}', [App\Http\Controllers\administradorController::class,'editarAdministrador']);

Route::get('/atualizarAdministrador/{id}', [App\Http\Controllers\administradorController::class,'atualizarAdministrador']);

Route::get('/excluirAdministrador/{id}', [App\Http\Controllers\administradorController::class,'excluirAdministrador']);




Route::get('/auth/login', function () {
    return view('auth.login'); 
})->name('login');

Route::get('/auth/register', function () {
    return view('auth.register'); 
})->name('register');

Route::get('/menuAdministrador', function () {
    return view('paginas/menuAdministrador');
});

Route::get('/aulaBack', function () {
    return view('paginas/aulaBack');
});


