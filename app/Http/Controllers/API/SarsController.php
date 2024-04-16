<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Sars;
use App\Http\Controllers\Controller;
use Exception;

class SarsController extends Controller
{
    public function index()
    {
        $sars = Sars::all();
        return response()->json($sars);
    }

    public function show($id)
    {
        $sars = Sars::find($id);
        return response()->json($sars);
    }

    // public function show($Name)
    // {
    //     // Vyhľadajte položku podľa first_name
    //     // $sars = Sars::where('name', $Name)->first();
    //     // $sars = Sars::where('name', $Name)->get();
    //     // Ak položka neexistuje, vráťte chybové kódy
    //     if (!$sars) {
    //         return response()->json(['error' => 'Sars not found'], 404);
    //     }

    //     // Vráťte položku vo formáte JSON
    //     return response()->json($sars);
    // }


    // Z dôvodu bezpečnosti, nebudeme povoľovať vkladanie, editovanie a mazanie 
}
