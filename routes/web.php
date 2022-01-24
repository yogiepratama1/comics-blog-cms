<?php

use App\Http\Livewire\Testing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

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
    return view('home');
});
Route::get('/characters', [CharactersController::class, 'index']);
Route::get('/character/{character:slug}', [CharactersController::class, 'show']);
Route::get('/events', [EventsController::class, 'index']);
Route::get('/event/{comic:slug}', [EventsController::class, 'show']);
Route::get('/testing', Testing::class);
Route::get('/testingshow/{comic:slug}', Testing::class, 'show');

Route::prefix('admin')->middleware(['auth:sanctum', 'verified', 'admin'])->name('admin.dashboard')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index']);
    Route::post('dashboard', [AdminDashboardController::class, 'store']);
    Route::get('dashboard/create', [AdminDashboardController::class, 'create']);
    Route::get('dashboard/{comic:slug}/edit', [AdminDashboardController::class, 'edit']);
    Route::put('dashboard/{comic:slug}', [AdminDashboardController::class, 'update']);
    Route::delete('dashboard/{id}', [AdminDashboardController::class, 'destroy']);
    // Character
    Route::get('dashboard/character/create', [AdminDashboardController::class, 'createcharacter']);
    Route::post('dashboard/character', [AdminDashboardController::class, 'storecharacter']);
    Route::get('dashboard/character/{character:slug}/edit', [AdminDashboardController::class, 'editcharacter']);
    Route::put('dashboard/character/{character:slug}', [AdminDashboardController::class, 'updatecharacter']);
});

Route::middleware(['auth:sanctum', 'verified'])->name('user.dashboard')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
});

Route::prefix('admin')->middleware(['auth:sanctum', 'verified', 'owner'])->name('admin.user')
    ->group(function () {
        Route::get('/dashboard/user', [UserController::class, 'index'])->name('admin.user');
        Route::get('/dashboard/user/{user:id}/edit', [UserController::class, 'edit']);
        Route::put('/dashboard/user/{user:id}', [UserController::class, 'update']);
        Route::post('/dashboard/user/{user:id}', [UserController::class, 'delete']);
    });
