<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SarsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SusdataController;
use App\Http\Models\Sars;

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

Route::get('/', function () { return view('index');});

// User
Route::get('sars/search', [SearchController::class, 'index'])->name('search');

// Admin
Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/admin/home', function () { return view('admin.index');});
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::controller(FileController::class)->group(function () {
        Route::delete('/sars/file-upload/{id}', 'destroy')->name('file-upload.destroy');
        Route::get('/sars/file-upload', 'index')->name('sars.fileUpload');
        Route::post('/sars/file-upload', 'store')->name('file.store');
        Route::post('/sars/file-upload/excel', 'showExcel')->name('file-upload.excel');
    });
   
    Route::resource('/sars/dataTable', SarsController::class);
    Route::resource('/susdata/susdataTable', SusdataController::class);
    // Route::get('/mapa', function () { return view('sars.mapa');});
});
