<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MapController;




Route::get('/dashboard', function () {
    return view('grafik');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/proses_login', [LoginController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


// Route::middleware(['auth','cek_login'])->group(function (){
//     return "berhasil login";
// });
//middleware mengizinkan yang sudah mempunya akses
Route::get('/dashboard', [DashboardController::class, 'grafik']);
    Route::get('/api/lineChart', [DashboardController::class, 'getLineChart']);
    Route::get('/api/barChart', [DashboardController::class, 'getBarChart']);
    Route::resource('/data', DataController::class);
    Route::resource('/map', MapController::class);


    

