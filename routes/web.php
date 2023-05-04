<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SarsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/create-user', [UserController::class, 'create']);

Route::middleware(['auth'])->group(function () {

    Route::controller(FileController::class)->group(function () {
        Route::get('/sars/file-upload', 'index')->name('sars.fileUpload');
        Route::post('/sars/file-upload', 'store')->name('file.store');
        Route::get('/sars/file-upload/excel', 'showExcel')->name('show.excel');
        Route::delete('/sars/file-upload/destroy', 'destroy')->name('file.delete');
    });
   
    Route::resource('/sars/dataTable', SarsController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Auth::routes();


