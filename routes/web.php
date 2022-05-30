<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculumController;

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

Route::get('/create_curriculum', function () {
    return view('create_curriculum');
})->name('create_curriculum');

Route::post('/insert_curriculum', [CurriculumController::class, 'insertCurriculum'])->name('insert_curriculum');

Route::get('/list_curriculums', [CurriculumController::class, 'listCurriculum'])->name('listCurriculum');

Route::get('/curriculum/{id}', [CurriculumController::class, 'curriculum'])->name('curriculum');