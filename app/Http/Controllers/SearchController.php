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
    $countries = SARS::select('name_of_country')->distinct()->get();
    $matrixes = SARS::select('sample_matrix')->distinct()->get();
    $providers = SARS::select('data_provider')->distinct()->get();
    $stations = SARS::select('station_name')->distinct()->get();
    $years = SARS::select('sample_from_year')->distinct()->get();

     return view('sars.searchSars', compact('results', 'countries', 'matrixes', 'providers', 'stations', 'years'));
}

}
