<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\Admin\AdminActorController;
use App\Http\Controllers\Admin\AdminGenreController;
use App\Http\Controllers\Admin\AdminMovieController;
use App\Http\Controllers\Front\FrontMovieController;
use App\Http\Controllers\Admin\AdminCountryController;
use App\Http\Controllers\Admin\AdminLanguageController;

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

Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.home');


// //to index
// Route::get('/admin/movies', [AdminMovieController::class, 'index'])->name('admin.movies');
// //create
// Route::get('/admin/movies/create', [AdminMovieController::class, 'create'])->name('admin.movies.create');;
// //to show + parameter route model binding
// Route::get('/admin/movies/{movie}', [AdminMovieController::class, 'show'])->name('admin.movies.show');;
// //to update + parameter route model binding
// Route::put('/admin/movies/{movie}', [AdminMovieController::class, 'update'])->name('admin.movies.update');;
// //to store
// Route::post('/admin/movies', [AdminMovieController::class, 'store'])->name('admin.movies.store');
// //to delete
// Route::delete('/admin/movies/{movie}', [AdminMovieController::class, 'destroy'])->name('admin.movies.destroy');
// //to edit
// Route::get('/admin/movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('admin.movies.edit');


//VIETOJ VISO SITO GALIMA NAUDOTI TRUMPINI, galima naudoti su exceptionais, arba su only. 

// Route::resource('admin/movies', AdminMovieController::class)
// Route::resource('admin/movies', AdminMovieController::class)->except('store');
// //galima prideti papildomus metodus
// Route::get('/admin/movies/search', [AdminMovieController::class, 'search']);

// Grupavimas

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('movies', AdminMovieController::class);
    Route::resource('actors', AdminActorController::class);
    Route::resource('countries', AdminCountryController::class);
    Route::resource('genres', AdminGenreController::class);
    Route::resource('languages', AdminLanguageController::class);
});


// Route::get('/admin', function () {
//     echo ('labas');
// });

Route::name('front.')->group(function () {
    Route::get('/', [FrontHomeController::class, 'index'])->name('home');
    Route::resource('movies', FrontMovieController::class)->only(['index','show']);
});