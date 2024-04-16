<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Susdata;
use App\Http\Controllers\Controller;
use Exception;

class SusdataController extends Controller
{
    public function index()
    {
        $susdata = Susdata::all();
        return response()->json($susdata);
    }

    public function show($id)
    {
        $susdata = Susdata::find($id);
        return response()->json($susdata);
    }

    // public function show($Name)
    // {
    //     // Vyhľadajte položku podľa first_name
    //     // $susdata = Susdata::where('name', $Name)->first();
    //     $susdata = Susdata::where('name', $Name)->get();
    //     // Ak položka neexistuje, vráťte chybové kódy
    //     if (!$susdata) {
    //         return response()->json(['error' => 'Susdata not found'], 404);
    //     }

        // Vráťte položku vo formáte JSON
    //     return response()->json($susdata);
    // }

}
