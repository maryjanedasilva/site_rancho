<?php

use Illuminate\Support\Facades\Route;


// Clientes
Route::get('/clientes', ClientesIndex::class)->name('clientes.index');
Route::get('/clientes/criar', ClientesCreate::class)->name('clientes.create');
Route::get('/clientes/editar/{id}', ClientesEdit::class)->name('clientes.edit');
// Contatos
Route::get('/contatos', ContatosIndex::class)->name('contatos.index');
Route::get('/contatos/create', ContatosCreate::class)->name('contatos.create');
Route::get('/contatos/edit/{id}', ContatosEdit::class)->name('contatos.edit');

// Avaliações
Route::get('/avaliacoes', AvaliacoesIndex::class)->name('avaliacoes.index');
Route::get('/avaliacoes/create', AvaliacoesCreate::class)->name('avaliacoes.create');
Route::get('/avaliacoes/edit/{id}', AvaliacoesEdit::class)->name('avaliacoes.edit');


// Página inicial / Home
Route::get('/', function () {
    return view('conheca.index');
})->name('home');

// Conheça o Rancho
Route::get('/conheca', function () {
    return view('conheca.index');
})->name('conheca');
