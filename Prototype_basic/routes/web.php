<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromotionController;
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
Route::get('/', [PromotionController::class, 'index']);
// Route::get('/', function () {
//     return view('index');
// });

Route::controller(PromotionController::class)->group(function(){
    // Route::get('/', 'index');
    Route::get('/promotion/create', 'create')->name('promotion.create');
    Route::post('/promotion/store', 'store')->name('promotion.store');
    Route::get('/promotion/edit/{id}', 'edit')->name('promotion.edit');
    Route::post('/promotion/update/{id}', 'update')->name('promotion.update');
    Route::get('/promotion/delete/{id}', 'destroy')->name('promotion.destroy');
    // Route::resource('/promotion', PromotionController::class);
    Route::get('/promotion/search', 'search')->name('promotion.search');
    });    

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
