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
        //
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
        dd($request);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
 
   public function fileUpload() {
    $path = base_path().'/public/uploads';
    $rows = SimpleExcelReader::create($path)->getRows();
    $p = [];
foreach($rows as $r) {
    $p[] = [
        'id' => $r['sars_id'],
        'type_of_data' => $r['type_of_data'],
        'data_provider' => $r['data_provider'],
        'contact_person' => $r['contact_person'],
        'address_of_contact' => $r['address_of_contact'],
        'email' => $r['email'],
        'laboratory' => $r['laboratory'],
        'name_of_country' => $r['name_of_country'],
        'name_of_city' => $r['name_of_city'],
        'station_name' => $r['station_name'],
        'national_code' => $r['national_code'],
        'relevant_ec_code_wise' => $r['relevant_ec_code_wise'],
        'relevant_ec_code_other' => $r['relevant_ec_code_other'],
        'other_code' => $r['other_code'],
        'latitude' => $r['latitude'],
        'latitude_d' => $r['latitude_d'],
        'latitude_m' => $r['latitude_m'],
        'latitude_s' => $r['latitude_s'],
        'latitude_decimal' => $r['latitude_decimal'],
        'longitude' => $r['longitude'],
        'longitude_d' => $r['longitude_d'],
        'longitude_m' => $r['longitude_m'],
        'longitude_s' => $r['longitude_s'],
        'longitude_decimal' => $r['longitude_decimal'],
        'altitude' => $r['altitude'],
        'design_capacity' => $r['design_capacity'],
        'population_served' => $r['population_served'],
        'catchment_size' => $r['catchment_size'],
        'gdp' => $r['gdp'],
        'people_positive' => $r['people_positive'],
        'people_recovered' => $r['people_recovered'],
        'people_positive_past' => $r['people_positive_past'],
        'people_recovered_past' => $r[ 'people_recovered_past'],
        'sample_matrix' => $r['sample_matrix'],
        'sample_from_hour' => $r['sample_from_hour'],
        'sample_from_day' => $r['sample_from_day'],
        'sample_from_month' => $r['sample_from_month'],
        'sample_from_year' => $r['sample_from_year'],
        'sample_to_hour' => $r['sample_to_hour'],
        'sample_to_day' => $r['sample_to_day'],
        'sample_to_month' => $r['sample_to_month'],
        'sample_to_year' => $r['sample_to_year'],
        'type_of_sample' => $r['type_of_sample'],
        'type_of_composite_sample' => $r['type_of_composite_sample'],
        'sample_interval' => $r['sample_interval'],
        'flow_total' => $r['flow_total'],
        'flow_minimum' => $r['flow_minimum'],
        'flow_maximum' => $r['flow_maximum'],
        'temperature' => $r['temperature'],
        'cod' => $r['cod'],
        'total_n_nh4_n' => $r['total_n_nh4_n'],
        'tss' => $r['tss'],
        'dry_weather_conditions' => $r['dry_weather_conditions'],
        'last_rain_event' => $r['last_rain_event'],
        'associated_phenotype' => $r['associated_phenotype'],
        'genetic_marker' => $r['genetic_marker'],
        'date_of_sample_preparation' => $r[ 'date_of_sample_preparation'],
        'storage_of_sample' => $r['storage_of_sample'],
        'volume_of_sample' => $r['volume_of_sample'],
        'internal_standard_used1' => $r['internal_standard_used1'],
        'method_used_for_sample_preparation' => $r['method_used_for_sample_preparation'],
        'date_of_rna_extraction' => $r['date_of_rna_extraction'],
        'method_used_for_rna_extraction' => $r['method_used_for_rna_extraction'],
        'internal_standard_used2' => $r['internal_standard_used2'],
        'rna1' => $r['rna1'],
        'rna2' => $r['rna2'],
        'replicates1' => $r['replicates1'],
        'analytical_method_type' => $r['analytical_method_type'],
        'analytical_method_type_other' => $r['analytical_method_type_other'],
        'date_of_analysis' => $r['date_of_analysis'],
        'lod1' => $r['lod1'],
        'lod2' => $r['lod2'],
        'loq1' => $r['loq1'],
        'loq2' => $r['loq2'],
        'uncertainty_of_the_quantification' => $r['uncertainty_of_the_quantification'],
        'efficiency' => $r['efficiency'],
        'rna3' => $r['rna3'],
        'pos_control_used' => $r['pos_control_used'],
        'replicates2' => $r['replicates2'],
        'ct' => $r['ct'],
        'gene1' => $r['gene1'],
        'gene2' => $r['gene2'],
        'comment' => $r['comment'],
        'sars_save' => $r['sars_save'],
        'sars_source' => $r['sars_source'],
        'sars_source_dir' => $r['sars_source_dir'],
        'longitude_decimal_show' => $r['longitude_decimal_show'],
        'latitude_decimal_show' => $r['latitude_decimal_show'],
        'noexport' => $r['noexport'],
    ];
}
    DB::norman('sars')->insert($p); 

   }
}
