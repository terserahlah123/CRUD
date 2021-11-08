<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

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

Route::get('/', [CobaController::class, 'index']);
Route::get('/create', [CobaController::class, 'create']);
Route::post('/store', [CobaController::class, 'store']);
Route::get('/edit/{id_santri}', [CobaController::class, 'edit']);
Route::get('/hapus/{id_santri}', [CobaController::class, 'destroy']);
Route::post('/update/{id_santri}', [CobaController::class, 'update']);

// Route::resource('coba', CobaController::class);
Route::get('/baru', [CobaController::class, 'baru']);