<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard',[AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/showUser',[AdminController::class, 'showUser'])->name('admin.showUser');
    Route::get('/admin/add',[AdminController::class, 'add'])->name('admin.add');
    Route::post('/admin/add', [AdminController::class, 'insert'])->name('admin.insert');
    Route::get('/admin/edit/{id}', [AdminController::class,'edit'])->name('admin.edit');
});

Route::middleware(['auth','role:manager'])->group(function () {
    Route::get('/manager/dashboard',[ManagerController::class, 'managerDashboard'])->name('manager.dashboard');
});


require __DIR__.'/auth.php';
