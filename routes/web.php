<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EadController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DisciplineController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\NoteStudentAverage;
use App\Http\Controllers\Admin\NoteStudentController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('site.sobre');
Route::get('/treinamentos', [SiteController::class, 'cursos'])->name('site.cursos');
Route::get('/treinamentos/{slug}', [SiteController::class, 'curso'])->name('site.curso');
Route::get('/pos-graduacao', [SiteController::class, 'posgraduacao'])->name('site.posgraduacao');
Route::get('/contato', [SiteController::class, 'contato'])->name('site.contato');
Route::post('/contato', [SiteController::class, 'send'])->name('site.enviar');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {

    Route::group([
        'middleware' => 'role:studient',
        'prefix'=>'aluno',
        'as'=>'studient.'
    ], function () {

        Route::resource('/', \App\Http\Controllers\Students\StudentController::class);
        Route::get('/{ead:slug}', [\App\Http\Controllers\Students\StudentController::class, 'show'])->name('show');

        Route::resource('lessons', \App\Http\Controllers\Students\LessonController::class);
        Route::get('courses/meus-cursos',[\App\Http\Controllers\Students\CourseController::class, 'index'])->name('courses.index');
        Route::get('/courses/todos-cursos', [\App\Http\Controllers\Students\CourseController::class, 'all_courses'])->name('courses.allcourses');
    });

    Route::group([
        'middleware' => 'role:teacher',
        'prefix' => 'teacher',
        'as' => 'teacher.'
    ], function() {
        Route::resource('courses', \App\Http\Controllers\Teachers\CourseController::class);
    });

    Route::group([
         'middleware' => 'role:admin',
         'prefix' => 'admin',
         'as' => 'admin.'
    ], function() {

        Route::resource('cursos', CourseController::class, ['names' => 'courses']);
        Route::resource('banners', BannerController::class);
        Route::resource('ead', EadController::class);
        Route::resource('usuarios', UserController::class, ['names' => 'users']);
        Route::resource('alunos', StudentController::class, ['names' => 'students']);
        Route::resource('disciplinas', DisciplineController::class, ['names' => 'discipline']);
        Route::resource('professores', TeacherController::class, ['names' => 'teacher']);
        Route::resource('avaliacoes', NoteController::class, ['names' => 'notes']);
        Route::resource('notas-da-avaliacao', NoteStudentController::class, ['names' => 'grades']);
        Route::resource('media-da-avaliacao', NoteStudentAverage::class, ['names' => 'average']);

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
        Route::prefix('/aulas-ead')->group(function(){
            Route::get('/aulas/{ead}', [LessonController::class, 'index'])->name('lessons.index');
            Route::get('/aula/{lesson}', [LessonController::class, 'show'])->name('lessons.show');
            Route::delete('/aula/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');
            Route::get('/aula/{ead}/create', [LessonController::class, 'create'])->name('lessons.create');
            Route::post('/aula', [LessonController::class, 'store'])->name('lessons.store');
            Route::get('/aula/{lesson}/edit', [LessonController::class, 'edit'])->name('lessons.edit');
            Route::put('/aula/{lesson}', [LessonController::class, 'update'])->name('lessons.update');
        });
        Route::prefix('/ead')->group(function(){
            Route::get('/{ead}/alunos', [EadController::class, 'studients'])->name('ead.studients');
            Route::put('/active/{idUser}/{idEad}', [EadController::class, 'active'])->name('ead.active');
            Route::put('/not-active/{idUser}/{idEad}', [EadController::class, 'notActive'])->name('ead.notActive');
        });

     });
});
