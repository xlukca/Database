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
    //     Route::get('/susdat/id/{id}/JSON', [SusdataController::class, 'showJSONid']);
        Route::get('/susdat/id/{id}/XML', [SusdataController::class, 'showXMLid']);

    // // name
    //     Route::get('/susdat/name/{names}/JSON', [SusdataController::class, 'showJSONname']);
        Route::get('/susdat/name/{name}/XML', [SusdataController::class, 'showXMLname']);

    // // cas_rn_dashboard
    //     Route::get('/susdat/cas_rn_dashboard/{cas_rn_dashboard}/JSON', [SusdataController::class, 'showJSONcasrn']);
        Route::get('/susdat/cas_rn/{cas_rn}/XML', [SusdataController::class, 'showXMLcasrn']);

    // // stdinchikey
    //     Route::get('/susdat/stdinchikey/{stdinchikey}/JSON', [SusdataController::class, 'showJSONinchikey']);
        Route::get('/susdat/stdinchikey/{stdinchikey}/XML', [SusdataController::class, 'showXMLinchikey']);

    // // dtxsid
    //     Route::get('/susdat/dtxsid/{dtxsid}/JSON', [SusdataController::class, 'showJSONdtxsid']);
        Route::get('/susdat/dtxsid/{dtxsid}/XML', [SusdataController::class, 'showXMLdtxsid']);

    Route::get('/susdat/{field}/{values}/JSON', [SusdataController::class, 'showJSON']);
    // Route::get('/susdat/{field}/{values}/XML', [SusdataController::class, 'showXML']);
    

// SARS API
        
    // // id
    //     Route::get('/sars/id/{id}/JSON', [SarsController::class, 'showJSONid']);
    Route::get('/sars/id/{id}/XML', [SarsController::class, 'showXMLid']);

    // ct
    //     Route::get('/sars/ct/{ct}/JSON', [SarsController::class, 'showJSONct']);
        Route::get('/sars/ct/{ct}/XML', [SarsController::class, 'showXMLct']);

    // station_name
    //     Route::get('/sars/station/{station_name}/JSON', [SarsController::class, 'showJSONstation']);
        Route::get('/sars/station_name/{station_name}/XML', [SarsController::class, 'showXMLstation']);

    // name_of_country
    //     Route::get('/sars/country/{name_of_country}/JSON', [SarsController::class, 'showJSONcountry']);
        Route::get('/sars/name_of_country/{name_of_country}/XML', [SarsController::class, 'showXMLcountry']);


    Route::get('/sars/{field}/{values}/JSON', [SarsController::class, 'showJSON']);
    // Route::get('/sars/{field}/{values}/XML', [SarsController::class, 'showXML']);