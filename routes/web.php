<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Frontend\TeamController as FrontendTeamController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Frontend\GalleryController as FrontendGalleryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\ServiceController as FrontendServiceController;
use App\Http\Controllers\Frontend\WelcomeController;
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


Route::get('/', [WelcomeController::class, 'welcome'])->name('frontend.welcome');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/frontend/contact', [ContactController::class, 'store'])->name('frontend.contact');
Route::get('/frontend/teams', [FrontendTeamController::class, 'index']);
Route::get('/frontend/galleries', [FrontendGalleryController::class, 'index']);
Route::get('/frontend/services', [FrontendServiceController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth','role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/store', [AdminController::class, 'store'])->name('admin.profile.store');
    Route::resource('/settings', SettingController::class)->only(['index', 'update']);
    Route::resource('/contacts', ContactController::class)->only(['index', 'destroy']);
    Route::post('delete_all_c', [ContactController::class, 'delete_all_c'])->name('delete_all_c');
    Route::resource('/teams', TeamController::class);
    Route::resource('/galleries', GalleryController::class);
    Route::resource('/services', ServiceController::class);

});


require __DIR__.'/auth.php';
