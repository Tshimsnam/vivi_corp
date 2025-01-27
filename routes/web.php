<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('agents', AgentController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('infos', InfoController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('quotes', QuoteController::class);
    Route::resource('partenaires', PartenaireController::class);
    Route::get('/dashboard', function () {
        return view('admin.index');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/services', [HomeController::class, 'service'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/Apropos', [HomeController::class, 'apropos'])->name('apropos');
