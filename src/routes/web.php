<?php
use App\Http\Controllers\GitCommandController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () { return view('toppage'); })->name('home');
    Route::get('/git-troubleshooting', function () { return view('git-troubleshooting'); })->name('git-troubleshooting');
    Route::get('/git-commands', [GitCommandController::class, 'index'])->name('git-commands.index');
    Route::get('/git-commands/search', [GitCommandController::class, 'search'])->name('git-commands.search');
});



require __DIR__.'/auth.php';
