<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastroController;
use Inertia\Inertia;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('cadastro', [CadastroController::class, 'index']);

Route::get('login', function(){
    return Inertia::render('cadastro', [
        'can' => [
            'createUser' => false
        ]
    ]);
});

Route::get('cadastrar', function(){
    return;
});

/* Route::post('/create', 'PostController@store');
Route::get('/create', 'PostController@create');
Route::get('/get', 'PostController@list');  */