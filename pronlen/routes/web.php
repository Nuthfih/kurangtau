<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProgrammerController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {return view('index');})->name('index');
Route::get('/learnmore', function () {return view('learnmore');})->name('learnmore');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');

Route::get('/programmer', [AuthController::class, 'showProgrammerForm'])->name('programmer');
 Route::post('/programmer', [AuthController::class, 'programmer']);

Route::resource('programmers', ProgrammerController::class);


Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.delete');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');