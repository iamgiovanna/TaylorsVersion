<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/quemsomos', function () {
    return view('site.quemsomos');
});


Route::get('/Contato', function () {
    return view('site.contato');
});

/*/
Route::get('/tabela', function () {
    return view('site.tabela');
});
*/
Route::post('/Contato', [ContatoController::class, 'enviarContato'])->name('contato.enviar');
