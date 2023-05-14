<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sars;
use App\Models\File;

class SearchController extends Controller
{
    public function index(Request $request)
{
    $query = $request->input('query');

    $results = SARS::where('name_of_country', 'LIKE', '%' . $query . '%')
                ->orwhere('sample_matrix', 'LIKE', '%' . $query . '%')
                ->orwhere('data_provider', 'LIKE', '%' . $query . '%')
                ->orwhere('station_name', 'LIKE', '%' . $query . '%')
                ->orwhere('sample_from_year', 'LIKE', '%' . $query . '%')
                ->get();

     return view('sars.searchSars', compact('results'));
}

public function show(Request $request)
{
    $query = $request->input('query');

    $results = SARS::where('name_of_country', 'LIKE', '%' . $query . '%')
                ->orwhere('sample_matrix', 'LIKE', '%' . $query . '%')
                ->orwhere('data_provider', 'LIKE', '%' . $query . '%')
                ->orwhere('station_name', 'LIKE', '%' . $query . '%')
                ->orwhere('sample_from_year', 'LIKE', '%' . $query . '%')
                ->get();

    return view('sars.searchShowSars', compact('results'));
}

}
