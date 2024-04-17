<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SusdataController;
use App\Http\Controllers\Api\SarsController;

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

// SUSDAT API

    // // id
    //     Route::get('/susdats/id/{id}/json', [SusdataController::class, 'showJSONid']);
        Route::get('/susdats/id/{id}/xml', [SusdataController::class, 'showXMLid']);

    // // name
    //     Route::get('/susdats/name/{names}/json', [SusdataController::class, 'showJSONname']);
        Route::get('/susdats/name/{name}/xml', [SusdataController::class, 'showXMLname']);

    // // cas_rn_dashboard
    //     Route::get('/susdats/casrn/{cas_rn_dashboard}/json', [SusdataController::class, 'showJSONcasrn']);
        Route::get('/susdats/casrn/{cas_rn_dashboard}/xml', [SusdataController::class, 'showXMLcasrn']);

    // // stdinchikey
    //     Route::get('/susdats/stdinchikey/{stdinchikey}/json', [SusdataController::class, 'showJSONinchikey']);
        Route::get('/susdats/stdinchikey/{stdinchikey}/xml', [SusdataController::class, 'showXMLinchikey']);

    // // dtxsid
    //     Route::get('/susdats/dtxsid/{dtxsid}/json', [SusdataController::class, 'showJSONdtxsid']);
        Route::get('/susdats/dtxsid/{dtxsid}/xml', [SusdataController::class, 'showXMLdtxsid']);

    Route::get('/susdats/{field}/{values}/json', [SusdataController::class, 'showJSON']);
    // Route::get('/susdats/{field}/{values}/xml', [SusdataController::class, 'showXML']);
    

// SARS API
        
    // // id
    //     Route::get('/sars/id/{id}/json', [SarsController::class, 'showJSONid']);
    Route::get('/sars/id/{id}/xml', [SarsController::class, 'showXMLid']);

    // ct
    //     Route::get('/sars/ct/{ct}/json', [SarsController::class, 'showJSONct']);
        Route::get('/sars/ct/{ct}/xml', [SarsController::class, 'showXMLct']);

    // station_name
    //     Route::get('/sars/station/{station_name}/json', [SarsController::class, 'showJSONstation']);
        Route::get('/sars/station_name/{station_name}/xml', [SarsController::class, 'showXMLstation']);

    // name_of_country
    //     Route::get('/sars/country/{name_of_country}/json', [SarsController::class, 'showJSONcountry']);
        Route::get('/sars/name_of_country/{name_of_country}/xml', [SarsController::class, 'showXMLcountry']);


    Route::get('/sars/{field}/{values}/json', [SarsController::class, 'showJSON']);
    // Route::get('/sars/{field}/{values}/xml', [SarsController::class, 'showXML']);