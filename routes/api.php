<?php

use App\Models\PaketSkema;
use Illuminate\Http\Request;
use App\Models\UnitKompetensi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElemenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SchemaController;
use App\Http\Controllers\HasilApl01Controller;
use App\Http\Controllers\HasilApl02Controller;
use App\Http\Controllers\PaketSkemaController;
use App\Http\Controllers\KelengkapanController;
use App\Http\Controllers\PaketAsesmenController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HasilAk01Controller;
use App\Http\Controllers\HasilIa01Controller;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TukController;
use App\Http\Controllers\UnitKompetensiController;

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
    Route::get('/logout', [AuthenticationController::class,'logout']);
    Route::get('/me',[AuthenticationController::class,'me']);
    Route::get('/jadwal',[JadwalController::class,'index']);
    Route::put('/jadwal/{id}',[JadwalController::class,'update']);
    Route::get('/unit_kompetensi/{id}',[UnitKompetensiController::class,'index']);
    Route::get('/kelengkapan/{id}',[KelengkapanController::class,'index']);
    Route::get('/asesor',[AuthenticationController::class,'showAsesor']);
    Route::get('/whoUser/{id}',[AuthenticationController::class,'showUser']);


    Route::controller(ElemenController::class)->group(function(){
        Route::get('/elemen/{id}','index');
    });


    Route::controller(PaketSkemaController::class)->group(function () {
        Route::get('/paketskema', 'index');
        Route::get('/paketasesmen/user/{id}', 'showAllUser');
        Route::post('/paketskema', 'store');
        Route::put('/paketskema/{id}', 'edit');
        Route::delete('/paketskema/{id}', 'destroy');
    });

    Route::controller(TukController::class)->group(function(){
        Route::get('/tuk','index');
    });

    Route::controller(SesiController::class)->group(function(){
        Route::get('/sesi/{id}','show');
        Route::get('/whosesi/{id}','showNow');
        Route::post('/sesi', 'store');
        Route::put('/sesi/{id}', 'edit');
        Route::delete('/sesi/{id}', 'destroy');
        Route::get('/sesi/peserta/{id}', 'showPeserta');
    
    });

    Route::controller(HasilApl01Controller::class)->group(function(){
        Route::post('/hasilapl01','store');
        Route::get('/hasilapl01/{id}','show');
        Route::put('/hasilapl01/{id}', 'edit');
        Route::put('/assignAsesor/{id}', 'assign');
        Route::get('/hasilapl01lengkap/{id}','showDetail');
    });
    Route::controller(HasilApl02Controller::class)->group(function(){
        Route::post('/hasilapl02','store');
        Route::get('/hasilapl02/{id}','show');
        Route::put('/hasilapl02/{id}', 'edit');
        Route::get('/hasilapl02lengkap/{id}','showDetail');
    });
    Route::controller(HasilAk01Controller::class)->group(function(){
        Route::post('/hasilak01','store');
        Route::put('/hasilak01/{id}', 'edit');
        Route::get('/checkhasilak01/{id1}/{id2}','check');
        Route::get('/hasilak01/{id}','show');
        Route::get('/detail-ak01/{id}','detail');
    });
    Route::controller(HasilIa01Controller::class)->group(function(){
        Route::post('hasilia01','store');
    });
    Route::controller(SchemaController::class)->group(function () {
        Route::get('/schema', 'index');
        Route::get('/schema/{id}', 'show');
        Route::get('/whatSchema/{id}', 'showSchema');
        Route::get('/turunanSkema/{id}', 'detailSchema');
    });
});  

