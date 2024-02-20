<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//Route::delete('/logout/{user}', [UserController::class, 'destroy']);
// Route::prefix('dashboard')->middleware('auth:sanctum')->group(function () {
//     Route::get('/product', [ProductController::class, 'index'])->name('product.index');
// });

Route::resource('product', ProductController::class)->middleware('auth:sanctum')->names('product');
//Route::post('/login', [UserController::class, 'store'])->middleware('auth:sanctum');
//Route::get('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'create'])
//     ->middleware(['auth', 'verified', 'twofactor.confirm']);
// Route::get('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'create'])
//     ->middleware(['auth', 'verified', 'twofactor.confirm']);

Route::get('/two-factor.login', [TwoFactorAuthenticatedSessionController::class, 'create'])
    ->middleware(['auth', 'verified', 'twofactor.confirm']);




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::resource('/product', function () {
//         return Inertia::render('first/welcome');
//     })->name('product');
// });



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
