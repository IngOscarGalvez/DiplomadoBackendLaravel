<?php

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('crud', [CrudController::class, 'index']);
Route::post('crud', [CrudController::class, 'store']);
Route::get('crud/{id}', [CrudController::class, 'show']);
Route::put('crud/{id}', [CrudController::class, 'update']);
Route::delete('crud/{id}', [CrudController::class, 'destroy']);





