<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/posts', [BlogController::class, 'index']);
Route::post('/posts', [BlogController::class, 'post']);
Route::get('/post/{id}', [BlogController::class, 'show']);
Route::put('/post/{id}', [BlogController::class, 'update']);
Route::delete('/post/{id}', [BlogController::class, 'delete']);

Route::get('/categories', [BlogController::class, 'indexCategory']);
Route::post('/categories', [BlogController::class, 'createCategory']);
Route::get('/category/{id}', [BlogController::class, 'showCategory']);
Route::put('/category/{id}', [BlogController::class, 'updateCategory']);
Route::delete('/category/{id}', [BlogController::class, 'deleteCategory']);