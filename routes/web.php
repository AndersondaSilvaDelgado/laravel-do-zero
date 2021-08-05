<?php

use App\Http\Controllers\Site\{
    AboutController,
    HomeController,
    CategoryController,
    BlogController,
    ContactController
};
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('site.index');
Route::get('/produtos', [CategoryController::class, 'index'])->name('site.produtos.index');
Route::get('/produtos/{slug}', [CategoryController::class, 'show'])->name('site.produtos.show');
Route::get('/blog', BlogController::class)->name('site.blog');
Route::get('/sobre', AboutController::class)->name('site.about');
Route::get('/contatos', [ContactController::class, 'index'])->name('site.contato.index');
Route::post('/contatos', [ContactController::class, 'msg'])->name('site.contato.msg');
