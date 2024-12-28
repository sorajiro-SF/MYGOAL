<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MprofileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\FromController;
use App\Http\Controllers\QuizController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/Mprofile', [MprofileController::class, 'index'])->name('Mprofile.index');
    Route::get('/Mprofile/create', [MprofileController::class, 'create'])->name('Mprofile.create');
    Route::post('/Mprofile', [MprofileController::class, 'store'])->name('Mprofile.store');
    Route::get('/Mprofile/{pro}', [MprofileController::class ,'show'])->name('Mprofile.show');
    Route::post('/Mprofile/{pro}', [MprofileController::class, 'update'])->name('Mprofile.update');
    Route::get('/Mprofile/{pro}/edit', [MprofileController::class, 'edit'])->name('Mprofile.edit');
    Route::post('/Mprofile/{pro}/delete', [MprofileController::class, 'delete'])->name('Mprofile.delete');
});



require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function(){
    Route::get('/relation', [RelationController::class, 'relations'])->name('relations');
    Route::post('/relation',[RelationController::class,"store"])->name('store');
    Route::get('/relation/create', [RelationController::class, 'create'])->name('create');
    //Route::get('relation/{relation}', [RelationController::class ,'show'])->name('show');
    Route::post('/relation/{relation}', [RelationController::class, 'update'])->name('update');
    Route::post('/relation/{relation}/delete', [RelationController::class,'delete'])->name('delete');
    Route::get('/relation/{relation}/edit', [RelationController::class, 'edit'])->name('edit');
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/from', [FromController::class, 'froms'])->name('froms');
    Route::get('/from/{from}/edit', [FromController::class, 'edit'])->name('edit');
    Route::post('/from',[FromController::class,"store"])->name('store');
    Route::get('/from/create', [FromController::class, 'create'])->name('create');
    Route::post('/from/{from}', [FromController::class, 'update'])->name('update');
    Route::post('/from/{from}/delete', [FromController::class,'delete'])->name('delete');

});


Route::middleware('auth')->group(function () {
    Route::get('/Quiz', [QuizController::class, 'QuizSelect'])->name('Quiz.select');
    Route::post('/Quiz/{pro}', [QuizController::class, 'QuiCheck'])->name('Quiz.check');
    Route::get('/Quiz/{pro}', [QuizController::class, 'QuizQuestion'])->name('Quiz.question');
});

Route::middleware('auth')->group(function () {
    Route::get('/NewQuiz', [QuizController::class, 'NewQuizSelect'])->name('NewQuiz.select');
    Route::post('/NewQuiz/{pro}', [QuizController::class, 'NewQuiCheck'])->name('NewQuiz.check');
    Route::get('/NewQuiz/{pro}', [QuizController::class, 'NewQuizQuestion'])->name('NewQuiz.question');
});