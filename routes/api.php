<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SchemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
 
Route::get('/schema', [SchemaController::class,'index'])->middleware(['auth:sanctum']);
Route::post('/login', [AuthenticationController::class,'login']);
Route::post('/register', [AuthenticationController::class,'register']);
Route::get('/logout', [AuthenticationController::class,'logout'])->middleware((['auth:sanctum']));
Route::get('/me',[AuthenticationController::class,'me'])->middleware((['auth:sanctum']));