<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboard/create-slider', [dashboardController::class, 'createSlider'])->name('dashboard.createSlider');
Route::post('/dashboard/store-slider', [dashboardController::class, 'storeSlider'])->name('dashboard.storeSlider');

Route::get('/dashboard/create-about', [dashboardController::class, 'createAbout'])->name('dashboard.createAbout');
Route::post('/dashboard/store-about', [dashboardController::class, 'storeAbout'])->name('dashboard.storeAbout');

Route::get('/dashboard/create-work', [dashboardController::class, 'createWork'])->name('dashboard.createWork');
Route::post('/dashboard/store-work', [dashboardController::class, 'storeWork'])->name('dashboard.storeWork');

Route::get('/dashboard/create-portfilio', [dashboardController::class, 'createPortfilio'])->name('dashboard.createPortfilio');
Route::post('/dashboard/store-portfilio', [dashboardController::class, 'storePortfilio'])->name('dashboard.storePortfilio');

Route::get('/dashboard/create-client', [dashboardController::class, 'createClient'])->name('dashboard.createClient');
Route::post('/dashboard/store-client', [dashboardController::class, 'storeClient'])->name('dashboard.storeClient');

Route::get('/dashboard/create-news', [dashboardController::class, 'createNews'])->name('dashboard.createNews');
Route::post('/dashboard/store-news', [dashboardController::class, 'storeNews'])->name('dashboard.storeNews');



