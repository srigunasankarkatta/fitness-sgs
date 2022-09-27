<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FitnessCenterConteroller;
use App\Http\Controllers\Admin\ExpertCategoryController;
use App\Http\Controllers\Admin\ExpertController;
use App\Http\Controllers\Admin\FitnessCenterCategoryController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FitnessCenterConroller;

use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\FrontendConroller;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// blog routes
Route::get('blog', [FrontendConroller::class, 'index'])->name('home.blog');

// frontend routes
Route::get('/', [HomeController::class, 'home'])->name('home.home');

Route::controller(HomeController::class)->group(function () {
    Route::get('{slug}', 'fitnessCenter')->name('admin.expert_category');
});

// admin routes
Route::get('admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // expert category routes
    Route::controller(ExpertCategoryController::class)->group(function () {
        Route::get('expert-category', 'index')->name('admin.expert_category');
        Route::get('expert-category/create', 'create')->name('admin.expert_category.create');
        Route::post('expert-category', 'store')->name('admin.expert_category.store');
        Route::get('expert-category/{category}/edit', 'edit')->name('admin.expert_category.edit');
        Route::put('expert-category/{category}', 'update')->name('admin.expert_category.update');
        Route::get('expert-category/{id}/destroy', 'destroy')->name('admin.expert_category.destroy');

    });

    // expert routes
    Route::controller(ExpertController::class)->group(function () {
        Route::get('expert', 'index')->name('admin.expert');
        Route::get('expert/create', 'create')->name('admin.expert.create');
        Route::post('expert', 'store')->name('admin.expert.store');
        Route::get('expert/{id}/edit', 'edit')->name('admin.expert.edit');
        Route::put('expert/{id}', 'update')->name('admin.expert.update');
        Route::get('expert/{id}/destroy', 'destroy')->name('admin.expert.destroy');


        Route::get('expert-image/{expert_image_id}/delete', 'destroyImage')->name('admin.expert-image.delete');
        Route::get('expert-video/{expert_video_id}/delete', 'destroyVideo')->name('admin.expert-video.delete');
    
    });

    
    // fitness center category routes
    Route::controller(FitnessCenterCategoryController::class)->group(function () {
        Route::get('fitness-center-category', 'index')->name('admin.fitness_center_category.index');
        Route::get('fitness-center-category/create', 'create')->name('admin.fitness_center_category.create');
        Route::post('fitness-center-category', 'store')->name('admin.fitness_center_category.store');
        Route::get('fitness-center-category/{id}/edit', 'edit')->name('admin.fitness_center_category.edit');
        Route::put('fitness-center-category/{id}', 'update')->name('admin.fitness_center_category.update');
        Route::get('fitness-center-category/{id}/destroy', 'destroy')->name('admin.fitness-center-category.destroy');
    });


    // fitness center routes
    Route::controller(FitnessCenterConteroller::class)->group(function () {
        Route::get('fitness-center', 'index')->name('admin.fitness-center');
        Route::get('fitness-center/create', 'create')->name('admin.fitness-center.create');
        Route::post('fitness-center', 'store')->name('admin.fitness-center.store');
        Route::get('fitness-center/{id}/edit', 'edit')->name('admin.fitness-center.edit');
        Route::put('fitness-center/{id}', 'update')->name('admin.fitness-center.update');
        Route::get('fitness-center/{id}/destroy', 'destroy')->name('admin.fitness-center.destroy');


        Route::get('fitness-center-image/{fitness_center_slider_image_id}/delete', 'destroyImage')->name('admin.fitness-center-image.delete');
        Route::get('fitness-center-video/{fitness_center_banner_video_id}/delete', 'destroyVideo')->name('admin.fitness-center-video.delete');
    });

    // blog category routes 
    Route::controller(BlogCategoryController::class)->group(function () {
        Route::get('blog-category', 'index')->name('admin.blog_category.index');
        Route::get('blog-category/create', 'create')->name('admin.blog_category.create');
        Route::post('blog-category', 'store')->name('admin.blog_category.store');
        Route::get('blog-category/{id}/edit', 'edit')->name('admin.blog_category.edit');
        Route::put('blog-category/{id}', 'update')->name('admin.blog_category.update');
        Route::get('blog-category/{id}/destroy', 'destroy')->name('admin.blog-category.destroy');

    });

    // blog post routes
    Route::controller(BlogPostController::class)->group(function () {
        Route::get('blog-post', 'index')->name('admin.blog-post');
        Route::get('blog-post/create', 'create')->name('admin.blog-post.create');
        Route::post('blog-post', 'store')->name('admin.blog-post.store');
        Route::get('blog-post/{post_id}/edit', 'edit')->name('admin.blog-post.edit');
        Route::put('blog-post/{post_id}', 'update')->name('admin.blog-post.update');
        Route::get('blog-post/{post_id}/destroy', 'destroy')->name('admin.blog-post.destroy');
    });

    Route::get('/ckeditor', [CkeditorController::class, 'index']);
    Route::get('/ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');

});
