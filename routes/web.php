<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\ContactController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('site.sobre');
Route::get('/contato', [SiteController::class, 'contato'])->name('site.contato');
Route::post('/contato', [SiteController::class, 'send'])->name('site.enviar');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group([
         'prefix' => 'admin',
         'as' => 'admin.'
    ], function() {

        Route::resource('banners', BannerController::class);
        Route::resource('usuarios', UserController::class, ['names' => 'users']);

        Route::prefix('/')->group(function(){
            Route::get('/', [AdminController::class, 'index'])->name('index');
            Route::get('empresa', [AboutController::class, 'index'])->name('about.index');
            Route::put('empresa/{about}', [AboutController::class, 'update'])->name('about.update');
        });

        Route::prefix('/config')->group(function(){
            Route::get('/', [ConfigController::class, 'index'])->name('config.index');
            Route::put('/{config}', [ConfigController::class, 'update'])->name('config.update');
        });

        Route::prefix('/contato')->group(function(){
            Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
            Route::get('/{contato}', [ContactController::class, 'show'])->name('contacts.show');
            Route::delete('/{contato}', [ContactController::class, 'destroy'])->name('contacts.destroy');
        });

     });
});
