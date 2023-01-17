<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('site.home'); })->name('home');
Route::get('/quem-somos', function () { return view('site.quem-somos'); })->name('quem-somos');
Route::get('/contato', function () { return view('site.contato'); })->name('contato');
Route::get('/faq', function () { return view('site.faq'); })->name('faq');
Route::get('/sac', function () { return view('site.sac'); })->name('sac');
Route::get('/seja-um-parceiro', function () { return view('site.parceiro'); })->name('seja-parceiro');
Route::get('/produtos', function () { return 'Produtos'; });
Route::get('/acessorios', function () { return 'Acessórios'; });
Route::get('/blog', function () { return view('site.blog'); })->name('blog');
Route::get('/blog/{slug}', \App\Http\Livewire\Post\View::class)->name('post.view');
// Route::get('/artigo/{post}', \App\Http\Livewire\Post\Edit::class)->name('post.edit');
Route::get('/lojas-fisicas', function () { return view('site.lojas-fisicas'); })->name('lojas-fisicas');
Route::get('/lojas-online', function () { return view('site.lojas-online'); })->name('lojas-online');
Route::get('/novidades', function () { return 'Novidades'; })->name('novidades');
Route::get('/destaques', function () { return 'Destaques'; })->name('destaques');




Route::get('/welcome', function () { return view('welcome'); });

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {

    Route::get('/', function () { return view('dashboard'); })->name('dashboard');

    Route::get('/content', \App\Http\Livewire\Content\Index::class)->name('content.index');
    Route::get('/content/create', \App\Http\Livewire\Content\Create::class)->name('content.create');
    Route::get('/content/{content}', \App\Http\Livewire\Content\Edit::class)->name('content.edit');

    Route::get('/faq', \App\Http\Livewire\Faq\Index::class)->name('faq.index');
    Route::get('/faq/create', \App\Http\Livewire\Faq\Create::class)->name('faq.create');
    Route::get('/faq/{faq}', \App\Http\Livewire\Faq\Edit::class)->name('faq.edit');

    Route::get('/leads/contato', \App\Http\Livewire\Contact\Index::class)->name('leads.contact.index');
    Route::get('/leads/contato/{contact}', \App\Http\Livewire\Contact\View::class)->name('leads.contact.view');

    Route::get('/leads/sac', \App\Http\Livewire\Sac\Index::class)->name('leads.sac.index');
    Route::get('/leads/sac/{sac}', \App\Http\Livewire\Sac\View::class)->name('leads.sac.view');

    Route::get('/leads/parceiro', \App\Http\Livewire\Partner\Index::class)->name('leads.partner.index');
    Route::get('/leads/parceiro/{partner}', \App\Http\Livewire\Partner\View::class)->name('leads.partner.view');

    Route::get('/loja-online', \App\Http\Livewire\OnlineStore\Index::class)->name('online-store.index');
    Route::get('/loja-online/criar', \App\Http\Livewire\OnlineStore\Create::class)->name('online-store.create');
    Route::get('/loja-online/{onlinestore}', \App\Http\Livewire\OnlineStore\Edit::class)->name('online-store.edit');

    Route::get('/produtos/categoria', \App\Http\Livewire\Category\Index::class)->name('products.categories.index');
    Route::get('/produtos/categoria/criar', \App\Http\Livewire\Category\Create::class)->name('products.categories.create');
    Route::get('/produtos/categoria/{category}', \App\Http\Livewire\Category\Edit::class)->name('products.categories.edit');

    Route::get('/produtos/informacoes', \App\Http\Livewire\Info\Index::class)->name('info.index');
    Route::get('/produtos/informacoes/criar', \App\Http\Livewire\Info\Create::class)->name('info.create');
    Route::get('/produtos/informacoes/{info}', \App\Http\Livewire\Info\Edit::class)->name('info.edit');

    Route::get('/produtos', \App\Http\Livewire\Product\Index::class)->name('products.index');
    Route::get('/produtos/criar', \App\Http\Livewire\Product\Create::class)->name('products.create');
    Route::get('/produtos/{product}', \App\Http\Livewire\Product\Edit::class)->name('products.edit');
    Route::get('/produtos/{product_id}/galeria', \App\Http\Livewire\Product\Gallery::class)->name('products.gallery');

    Route::get('/banner', \App\Http\Livewire\Banner\Index::class)->name('banner.index');
    Route::get('/banner/criar', \App\Http\Livewire\Banner\Create::class)->name('banner.create');
    Route::get('/banner/{banner}', \App\Http\Livewire\Banner\Edit::class)->name('banner.edit');

    Route::get('/artigo', \App\Http\Livewire\Post\Index::class)->name('post.index');
    Route::get('/artigo/criar', \App\Http\Livewire\Post\Create::class)->name('post.create');
    Route::get('/artigo/{post}', \App\Http\Livewire\Post\Edit::class)->name('post.edit');

    Route::get('/user', \App\Http\Livewire\User\Index::class)->name('user.index');
    Route::get('/user/criar', \App\Http\Livewire\User\Create::class)->name('user.create');
    Route::get('/user/{user}', \App\Http\Livewire\User\Edit::class)->name('user.edit');


    Route::get('/configuracoes', \App\Http\Livewire\Config\Index::class)->name('config');
    Route::get('/empresa', \App\Http\Livewire\Company\Index::class)->name('company');
});
