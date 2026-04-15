<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/welcome')->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/menu/{jenis}', function ($jenis) {
    if ($jenis == 'konsultasi') {
        return view('menu.konsultasi');
    } elseif ($jenis == 'janji') {
        return view('menu.janji');
    } else {
        return 'Menu tidak tersedia';
    }
})->name('menu.layanan');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/{fitur}', function ($fitur) {
    if ($fitur == 'categories') {
        return app(AdminController::class)->categories();
    } elseif ($fitur == 'order') {
        return app(AdminController::class)->order();
    } elseif ($fitur == 'members') {
        return app(AdminController::class)->members();
    } elseif ($fitur == 'doctors') {
        return app(AdminController::class)->doctors();
    } else {
        return 'Menu admin tidak tersedia';
    }
})->name('admin.fitur');

Route::get('/category/showExpensiveService', [CategoryController::class, 'showExpensiveService']);

Route::resource('services', ServiceController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('transactions', TransactionController::class);
Route::resource('categories', CategoryController::class);
Route::resource('articles', ArticleController::class);

