<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sars;
use App\Models\File;

class SearchController extends Controller
{
    public function index(Request $request)
{
    $name_of_country = $request->input('name_of_country') ?? array();
    $sample_matrix = $request->input('sample_matrix') ?? array();
    $station_name = $request->input('station_name') ?? array();
    $sample_from_year = $request->input('sample_from_year') ?? array();
    $data_provider = $request->input('data_provider') ?? array();
   // dd($query1);
   // $query1 = [2020];
   $sql = [];
   if  ($name_of_country) { 
    $value = implode("','", $name_of_country); 
    $sql[] .= "name_of_country IN ('$value')";
    }
    if  ($sample_matrix) { 
        $value = implode("','", $sample_matrix); 
        $sql[] .= "sample_matrix IN ('$value')";
        }
    if  ($station_name) { 
        $value = implode("','", $station_name); 
        $sql[] .= "station_name IN ('$value')";
        }
    if  ($sample_from_year) { 
        $value = implode("','", $sample_from_year); 
        $sql[] .= "sample_from_year IN ('$value')";
        }
    if  ($data_provider) { 
        $value = implode("','", $data_provider); 
        $sql[] .= "data_provider IN ('$value')";
        }
    if($sql) {
        $query = 'WHERE ' . implode(' AND ', $sql);
    }
    else {
        $query = '';
    }
    $results = \DB::select("SELECT * FROM sars $query");
                
      //->orwhere('sample_from_year', 'IN', '(' . implode(',',$query1) . ')')          
                
    $countries = SARS::select('name_of_country')->distinct()->get();
    $matrixes = SARS::select('sample_matrix')->distinct()->get();
    $providers = SARS::select('data_provider')->distinct()->get();
    $stations = SARS::select('station_name')->distinct()->get();
    $years = SARS::select('sample_from_year')->distinct()->get();

     return view('user.sars.searchSars', compact('results', 'countries', 'matrixes', 'providers', 'stations', 'years'));
}

}
