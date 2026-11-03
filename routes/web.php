<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\DashboardController;

// Route Website Publik

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects.index');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])
    ->name('projects.show');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');


// Route Admin

Route::prefix('admin')->name('admin.')->group(function () {

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

    // Autentikasi Admin

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');


    // CRUD Project Admin

    Route::get('/projects', [AdminProjectController::class, 'index'])
        ->name('projects.index');

    Route::get('/projects/create', [AdminProjectController::class, 'create'])
        ->name('projects.create');

    Route::post('/projects', [AdminProjectController::class, 'store'])
        ->name('projects.store');

    Route::get('/projects/pdf', [AdminProjectController::class, 'pdf'])
        ->name('projects.pdf');

    Route::get('/projects/{project}/edit', [AdminProjectController::class, 'edit'])
        ->name('projects.edit');

    Route::put('/projects/{project}', [AdminProjectController::class, 'update'])
        ->name('projects.update');

    Route::delete('/projects/{project}', [AdminProjectController::class, 'destroy'])
        ->name('projects.destroy');

});
