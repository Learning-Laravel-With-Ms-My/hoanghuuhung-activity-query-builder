<?php
use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'index']);
Route::get('/post/{id}',[PostController::class,'onePost']);
Route::post('/read',[PostController::class,'readData']);
Route::post('/create',[PostController::class,'create']);
Route::post('/update',[PostController::class,'update']);
Route::post('/delete',[PostController::class,'delete']);


