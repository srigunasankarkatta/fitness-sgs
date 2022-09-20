<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FitnessCenterConteroller;
use App\Http\Controllers\Admin\ExpertCategoryController;
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
})->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // expert category rooutes
    Route::controller(ExpertCategoryController::class)->group(function () {
        Route::get('expert-category', 'index')->name('admin.expert_category');
        Route::get('expert-category/create', 'create')->name('admin.expert_category.create');
        Route::post('expert-category', 'store')->name('admin.expert_category.store');
        Route::post('expert-category/{category}/edit', 'edit')->name('admin.expert_category.edit');
        Route::post('expert-category/{category}', 'update')->name('admin.expert_category.update');
    });

    // fitness center rooutes
    Route::controller(FitnessCenterConteroller::class)->group(function () {
        Route::get('fitness-center', 'index')->name('admin.fitness_center');
        Route::get('fitness-center/create', 'create')->name('admin.fitness_center.create');
        Route::post('fitness-center', 'store')->name('admin.fitness_center.store');
        Route::post('fitness-center/{category}/edit', 'edit')->name('admin.fitness_center.edit');
        Route::post('fitness-center/{category}', 'update')->name('admin.fitness_center.update');
    });
});
