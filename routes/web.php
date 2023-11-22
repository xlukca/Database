<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SarsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SusdataController;
use App\Http\Controllers\LoginRetentionController;
use App\Http\Controllers\LanguageController;

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

// Language
Route::get('language/{locale}', [LanguageController::class, 'language'])->name('language');

// User

    //SARS
Route::get('user/sars/search', [SarsController::class, 'search'])->name('searchSars');

    //SUSDATA
Route::get('user/susdata/search', [SusdataController::class, 'search'])->name('searchSusdata');


// Admin
Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/admin/home', function () { return view('admin.index');});
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // SARS
    Route::controller(FileController::class)->group(function () {
        Route::delete('admin/sars/file-upload/{id}', 'destroy')->name('file-upload.destroy');
        Route::get('admin/sars/file-upload', 'index')->name('sars.fileUpload');
        Route::post('admin/sars/file-upload', 'store')->name('file.store');
        Route::post('admin/sars/file-upload/excel', 'showExcel')->name('file-upload.excel');
        Route::delete('/admin/sars/file-upload/force/{id}', 'forceDestroy')->name('file-upload.forceDestroy');
        Route::post('/admin/sars/file-upload/restore/{id}', 'restore')->name('file-upload.restore');
    });
    Route::get('/admin/sars/map', [SarsController::class, 'map'])->name('sars.map');
    Route::resource('admin/sars', SarsController::class);
    Route::delete('/admin/sars/force/{id}', [SarsController::class, 'forceDestroy'])->name('sars.forceDestroy');
    Route::post('/admin/sars/restore/{id}', [SarsController::class, 'restore'])->name('sars.restore');
    
    // SUSDATA
    Route::resource('admin/susdata', SusdataController::class);
    Route::get('admin/sudata/changeLogs', [SusdataController::class, 'changeLogs'])->name('susdata.changeLogs');
    Route::delete('/admin/susdata/force/{id}', [SusdataController::class, 'forceDestroy'])->name('susdata.forceDestroy');
    Route::post('/admin/susdata/restore/{id}', [SusdataController::class, 'restore'])->name('susdata.restore');

    // USERS
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/retentions', LoginRetentionController::class);
});
