<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/pmb', function () {
    return view('pmb');
})->name('pmb.index');

Route::get('/news/{id}', [HomeController::class, 'showNews'])->name('news.show');

// Proses Simpan PMB
Route::post('/pmb', [DashboardController::class, 'storePmb'])->name('pmb.store');
require __DIR__.'/auth.php';

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/news', [DashboardController::class, 'newsIndex'])->name('admin.news');
    Route::post('/news', [DashboardController::class, 'storeNews'])->name('admin.news.store');
    Route::put('/news/{id}', [DashboardController::class, 'updateNews'])->name('admin.news.update');
    Route::delete('/news/{id}', [DashboardController::class, 'destroyNews'])->name('admin.news.destroy');
    Route::get('/teachers', [DashboardController::class, 'teacherIndex'])->name('admin.teachers');
    Route::post('/teacher', [DashboardController::class, 'storeTeacher'])->name('admin.teacher.store');
    Route::get('/pmb-registrations', [DashboardController::class, 'pmbIndex'])->name('admin.pmb.index');
    Route::post('/teachers', [DashboardController::class, 'storeTeacher'])->name('admin.teachers.store');
    Route::put('/teachers/{id}', [DashboardController::class, 'updateTeacher'])->name('admin.teachers.update');
    Route::delete('/teachers/{id}', [DashboardController::class, 'destroyTeacher'])->name('admin.teachers.destroy');
    Route::get('/gallery', [DashboardController::class, 'galleryIndex'])->name('admin.gallery');
    Route::post('/gallery', [DashboardController::class, 'storeGallery'])->name('admin.gallery.store');
    Route::put('/gallery/{id}', [DashboardController::class, 'updateGallery'])->name('admin.gallery.update');
    Route::delete('/gallery/{id}', [DashboardController::class, 'destroyGallery'])->name('admin.gallery.destroy');
});