<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyadminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AuthController;

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

// Homepage
Route::get('/', [HomeController::class, 'index']);
Route::get('/website', [HomeController::class, 'website']);
Route::get('/DetailWeb', [HomeController::class, 'DetailWeb']);
Route::get('/mobile', [HomeController::class, 'mobile']);
Route::post('/feedback', [FeedbackController::class, 'store']);

//admin
Route::get('/myadmin', [MyadminController::class, 'index'])->name('login');
Route::post('/myadmin', [MyadminController::class, 'auth']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/register', [MyadminController::class, 'register']);
    Route::post('/register', [MyadminController::class, 'store']);
    Route::post('/logout', [MyadminController::class, 'logout']);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('sosmed', SosmedController::class);
    Route::resource('framework', FrameworkController::class);
    Route::resource('language', LanguageController::class);
    Route::resource('web', WebController::class);
    Route::resource('account', AccountController::class);
    Route::middleware(['web', 'auth.password'])->group(function () {
        Route::resource('account', AccountController::class);
    });
    Route::resource('feedback', FeedbackController::class)->except(['store']);
    Route::middleware(['web'])->group(function () {
        Route::get('/authenticate-with-password', [AuthController::class, 'authenticateWithPassword'])->name('authenticate-with-password');
        Route::post('/process-authenticate-with-password', [AuthController::class, 'processAuthenticateWithPassword'])->name('process-authenticate-with-password');
    });
});

