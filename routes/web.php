<?php

use App\Http\Controllers\BicycleCardSubjectController;
use App\Http\Controllers\BicycleCardTestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Welcome;
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

//main page
Route::get('/', [Welcome::class, 'index'])->name('home');

//Test
Route::get('/bicycle_card_test', [BicycleCardTestController::class, 'index'])->name('test.index');
//Subject
Route::get('/bicycle_card_subject', [BicycleCardSubjectController::class, 'index'])->name('subject.index');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
