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
    public function edit(Sars $sarsData)
    {
         return view('sars.editSars')->with('sarsData', Sars::find($sarsData->id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sars $sarsData)
    {
        $rules = [
            'sample_from_year'              => 'required|text',
            'sample_from_month'             => 'required|text',
            'sample_from_day'               => 'required|text',
            'gene1'                         => 'required|text',
            'gene2'                         => 'required|text',
            'ct'                            => 'required|text',
            'station_name'                  => 'required|text',
            'population_served'             => 'required|text',
            'people_positive'               => 'required|text',
            'name_of_country'               => 'required|text',
        ];

        $validated = $request->validate($rules);

        $d = Sars::find($sarsData->id);
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

        return redirect()->route('sars.dataTable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sars $sarsData)
    {
        Sars::find($sarsData->id)->delete();

        return redirect()->route('sars.dataTable');
    }
 
}
