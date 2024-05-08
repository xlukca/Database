<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SarsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SusdatController;
use App\Http\Controllers\LoginRetentionController;
// use App\Http\Controllers\LanguageController;

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

Route::get('/info', function () {
    phpinfo();
});

Route::get('/', function () { return view('index');});

// User

    //SARS
Route::get('user/sars/search', [SarsController::class, 'search'])->name('searchSars');

    //SUSDAT
// Route::get('user/susdat/search', [SusdatController::class, 'search'])->name('searchSusdat');
Route::get('user/susdat/index', [SusdatController::class, 'userIndex'])->name('userIndexSusdat');
Route::get('user/susdat/list', [SusdatController::class, 'userGetIndex'])->name('listSusdat');

// Admin
Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('admin/api', function () { return view('admin.api');})->name('apiAdmin');
    Route::middleware(['user_type'])->group(function () {  

    // Positions
    Route::delete('/positions/force/{id}', [App\Http\Controllers\PositionController::class, 'forceDestroy'])->name('positions.forceDestroy');
    Route::post('/positions/restore/{id}', [App\Http\Controllers\PositionController::class, 'restore'])->name('positions.restore');
    Route::resource('/positions', App\Http\Controllers\PositionController::class);

    Route::get('/admin/home', function () { return view('admin.index');});

    // SARS
    Route::controller(FileController::class)->group(function () {
        Route::delete('admin/sars/file-upload/{id}', 'destroy')->name('file-upload.destroy');
        Route::get('admin/sars/file-upload', 'index')->name('sars.fileUpload');
        Route::post('admin/sars/file-upload', 'store')->name('file.store');
        Route::post('admin/sars/file-upload/excel', 'showExcel')->name('file-upload.excel');
        Route::delete('/admin/sars/file-upload/force/{id}', 'forceDestroy')->name('file-upload.forceDestroy');
        Route::post('/admin/sars/file-upload/restore/{id}', 'restore')->name('file-upload.restore');
    });
    Route::get('/admin/sars/map', [SarsController::class, 'mapAdmin'])->name('sarsMapAdmin');
    Route::resource('admin/sars', SarsController::class);
    Route::delete('/admin/sars/force/{id}', [SarsController::class, 'forceDestroy'])->name('sars.forceDestroy');
    Route::post('/admin/sars/restore/{id}', [SarsController::class, 'restore'])->name('sars.restore');
    
    // SUSDAT
    Route::resource('admin/susdat', SusdatController::class);
    Route::get('admin/sudata/changeLogs', [SusdatController::class, 'changeLogs'])->name('susdat.changeLogs');
    Route::delete('/admin/susdat/force/{id}', [SusdatController::class, 'forceDestroy'])->name('susdat.forceDestroy');
    Route::post('/admin/susdat/restore/{id}', [SusdatController::class, 'restore'])->name('susdat.restore');

    // USERS
    Route::delete('/users/force/{id}', [UserController::class, 'forceDestroy'])->name('users.forceDestroy');
    Route::post('/users/restore/{id}', [UserController::class, 'restore'])->name('users.restore');
    Route::resource('/admin/users', UserController::class);
        
        // Retentions
        Route::get('admin/retentions/index', [LoginRetentionController::class, 'index'])->name('retentions.index');
        Route::get('admin/retentions/show/{id}', [LoginRetentionController::class, 'show'])->name('retentions.show');
    });
    // SARS MAP    
    Route::get('/user/sars/map', [SarsController::class, 'map'])->name('sars.map');

    //API
    Route::get('user/api', function () { return view('user.api');})->name('api');
});
