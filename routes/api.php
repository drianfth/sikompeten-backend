<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HasilApl01Controller;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelengkapanController;
use App\Http\Controllers\PaketAsesmenController;
use App\Http\Controllers\SchemaController;
use App\Http\Controllers\UnitKompetensiController;
use App\Models\UnitKompetensi;
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
 
Route::post('/login', [AuthenticationController::class,'login']);
Route::post('/register', [AuthenticationController::class,'register']);


Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/schema', [SchemaController::class,'index']);
    Route::get('/schema/{id}', [SchemaController::class,'show']);
    Route::get('/logout', [AuthenticationController::class,'logout']);
    Route::get('/me',[AuthenticationController::class,'me']);
    Route::get('/jadwal',[JadwalController::class,'index']);
    Route::put('/jadwal/{id}',[JadwalController::class,'update']);
    Route::get('/unit_kompetensi/{id}',[UnitKompetensiController::class,'index']);
    Route::get('/kelengkapan/{id}',[KelengkapanController::class,'index']);
    Route::get('/hasilapl01/{id}',[HasilApl01Controller::class,'show']);
    Route::post('/hasilapl01',[HasilApl01Controller::class,'store']);
    Route::get('/asesor',[AuthenticationController::class,'showAsesor']);
    Route::controller(PaketAsesmenController::class)->group(function () {
        Route::get('/paketasesmen', 'index');
        Route::post('/paketasesmen', 'store');
        Route::put('/paketasesmen/{id}', 'edit');
        Route::delete('/paketasesmen/{id}', 'destroy');
    });
});


