<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ReviewController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return redirect()->route('category.index');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/jocs', [GameController::class, 'index'])->name('game.index');
Route::get('/jocs/{joc}', [GameController::class, 'show'])->name('game.show');

Route::post('/review', [ReviewController::class, 'store'])->name('review.store');
// Route::post('/review/delete/{review}', [ReviewController::class, 'destroy'])->name('review.destroy')->middleware('auth');

Route::get('/login', function () {
    session(['url.intended' => url()->previous()]);
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    session(['url.intended' => url()->previous()]);
    return view('auth.register');
})->name('register');

Route::post('/logout', function (Request $request) {
    $redirect_to = url()->previous();
    auth()->logout();
    return redirect($redirect_to);
})->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

