<?php

use App\Http\Controllers\FeedbackController;
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

Route::get('/', [FeedbackController::class, 'index'])->name('home');
Route::get('/show-feedback', [FeedbackController::class, 'show'])->name('show-feedback');
Route::post('/save-feedback', [FeedbackController::class, 'save'])->name('save-feedback');

