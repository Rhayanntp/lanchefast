<?php

use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\Produto\ProdutoShow;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;

Route::prefix('clientes')->group(function(){
Route::get('/', \App\Livewire\Cliente\Index::class)->name('clientes.index');
Route::get('/create', \App\Livewire\Cliente\Create::class)->name('cliente.create');
Route::get('/{id}/cliente', \App\Livewire\Cliente\Show::class)->name('cliente.show');
Route::get('/{cliente}/edit', \App\Livewire\Cliente\Edit::class)->name('cliente.edit');
});

Route::prefix('produtos')->group(function () {
Route::get('/', ProdutoIndex::class)->name('produtos.index');
Route::get('/create', ProdutoCreate::class)->name('produtos.create');
Route::get('/{produto}', ProdutoShow::class)->name('produtos.show');
Route::get('/{produto}/edit/{id}', ProdutoEdit::class)->name('produtos.edit');
});