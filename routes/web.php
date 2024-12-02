<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationController;
use App\Models\Relation;

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

Route::get('/', [RelationController::class, 'index']);
Route::get('/relation/create', [RelationController::class, 'create']);
Route::get('relation/{relation}', [RelationController::class ,'show']);
Route::post('/relation',[RelationController::class,"store"]);
Route::get('/relation/{relation}/edit', [RelationController::class, 'edit']);
Route::post('/relation/{relation}', [RelationController::class, 'update']);
Route::post('/relation/{relation}/delete', [RelationController::class,'delete']);