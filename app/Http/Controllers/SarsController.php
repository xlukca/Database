<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sars;
use Spatie\SimpleExcel\SimpleExcelReader;

class SarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarsData = Sars::all();
        return view('sars.dataTable')->with('sarsData', $sarsData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         return view('sars.editSars')->with('sarsData', Sars::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'sample_from_year'              => 'required|string',
            'sample_from_month'             => 'required|string',
            'sample_from_day'               => 'required|string',
            'gene1'                         => 'nullable|string',
            'gene2'                         => 'nullable|string',
            'ct'                            => 'nullable|string',
            'station_name'                  => 'required|string',
            'population_served'             => 'required|string',
            'people_positive'               => 'required|string',
            'name_of_country'               => 'required|string',
        ];
      
       // dd($request);
        $validated = $request->validate($rules);
        
        $d = Sars::find($id);
        $d->sample_from_year                 = $request->sample_from_year;
        $d->sample_from_month                = $request->sample_from_month;
        $d->sample_from_day                  = $request->sample_from_day;
        $d->gene1                            = $request->gene1;
        $d->gene2                            = $request->gene2;
        $d->ct                               = $request->ct;
        $d->station_name                     = $request->station_name;
        $d->population_served                = $request->population_served;
        $d->people_positive                  = $request->people_positive;
        $d->name_of_country                  = $request->name_of_country;
        $d->save();

        return redirect()->route('dataTable.index')->with('success', 'The file was succesfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Sars::find($id)->delete();

        return redirect()->route('dataTable.index')->with('success', 'The file was deleted.');
    }
 
}
