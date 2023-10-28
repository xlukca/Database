@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Update of the Sars</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::model($sarsData, ['route' => ['dataTable.update', $sarsData->id], 'method' => 'PUT']) }}

            {{ Form::label('sample_from_year', 'Sample_from_year') }}
            {{ Form::text('sample_from_year', $sarsData->sample_from_year, array('class' => 'form-control mb-3')) }}

            {{ Form::label('sample_from_month', 'Sample_from_month') }}
            {{ Form::text('sample_from_month', $sarsData->sample_from_month, array('class' => 'form-control mb-3')) }}

            {{ Form::label('sample_from_day', 'Sample_from_day') }}
            {{ Form::text('sample_from_day', $sarsData->sample_from_day, array('class' => 'form-control mb-3')) }}

            {{ Form::label('gene1', 'Gene copy [number/mL of sample]') }}
            {{ Form::text('gene1', $sarsData->gene1, array('class' => 'form-control mb-3')) }}

            {{ Form::label('gene2', 'Gene copy [number/ng of RNA]') }}
            {{ Form::text('gene2', $sarsData->gene2, array('class' => 'form-control mb-3')) }}

            {{ Form::label('ct', 'Ct #') }}
            {{ Form::text('ct', $sarsData->ct, array('class' => 'form-control mb-3')) }}

            {{ Form::label('station_name', 'Sampling Site/Station') }}
            {{ Form::text('station_name', $sarsData->station_name, array('class' => 'form-control mb-3')) }}
            
            {{ Form::label('population_served', 'Population Served') }}
            {{ Form::text('population_served', $sarsData->population_served, array('class' => 'form-control mb-3')) }}

            {{ Form::label('people_positive', 'No. of people SARS-CoV-2 POSITIVE') }}
            {{ Form::text('people_positive', $sarsData->people_positive, array('class' => 'form-control mb-3')) }}

            {{ Form::label('name_of_country', 'Country') }}
            {{ Form::text('name_of_country', $sarsData->name_of_country, array('class' => 'form-control mb-3')) }}

            {{ Form::label('type_of_data', 'Type of data') }}
            {{ Form::text('type_of_data', $sarsData->type_of_data, array('class' => 'form-control mb-3')) }}

            {{ Form::label('data_provider', 'Data provider') }}
            {{ Form::text('data_provider', $sarsData->data_provider, array('class' => 'form-control mb-3')) }}

            {{ Form::label('contact_person', 'Contact person') }}
            {{ Form::text('contact_person', $sarsData->contact_person, array('class' => 'form-control mb-3')) }}

            {{ Form::label('address_of_contact', 'Address of contact') }}
            {{ Form::text('address_of_contact', $sarsData->address_of_contact, array('class' => 'form-control mb-3')) }}

            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', $sarsData->email, array('class' => 'form-control mb-3')) }}

            {{ Form::label('laboratory', 'Laboratory') }}
            {{ Form::text('laboratory', $sarsData->laboratory, array('class' => 'form-control mb-3')) }}

            {{ Form::label('name_of_city', 'Name of city') }}
            {{ Form::text('name_of_city', $sarsData->name_of_city, array('class' => 'form-control mb-3')) }}

            {{ Form::label('national_code', 'National code') }}
            {{ Form::text('national_code', $sarsData->national_code, array('class' => 'form-control mb-3')) }}

            {{ Form::label('relevant_ec_code_wise', 'Relevant ec code wise') }}
            {{ Form::text('relevant_ec_code_wise', $sarsData->relevant_ec_code_wise, array('class' => 'form-control mb-3')) }}

            {{ Form::label('relevant_ec_code_other', 'Relevant ec code other') }}
            {{ Form::text('relevant_ec_code_other', $sarsData->relevant_ec_code_other, array('class' => 'form-control mb-3')) }}

            {{ Form::label('other_code', 'Other code') }}
            {{ Form::text('other_code', $sarsData->other_code, array('class' => 'form-control mb-3')) }}

            {{ Form::label('latitude', 'Latitude') }}
            {{ Form::text('latitude', $sarsData->latitude, array('class' => 'form-control mb-3')) }}

            {{ Form::label('latitude_d', 'Latitude d') }}
            {{ Form::text('latitude_d', $sarsData->latitude_d, array('class' => 'form-control mb-3')) }}

            {{ Form::label('latitude_m', 'Latitude m') }}
            {{ Form::text('latitude_m', $sarsData->latitude_m, array('class' => 'form-control mb-3')) }}

            {{ Form::label('latitude_s', 'Latitude s') }}
            {{ Form::text('latitude_s', $sarsData->latitude_s, array('class' => 'form-control mb-3')) }}

            {{ Form::label('latitude_decimal', 'Latitude decimal') }}
            {{ Form::text('latitude_decimal', $sarsData->latitude_decimal, array('class' => 'form-control mb-3')) }}

            {{ Form::label('longitude', 'Longitude') }}
            {{ Form::text('longitude', $sarsData->longitude, array('class' => 'form-control mb-3')) }}

            {{ Form::label('longitude_d', 'Longitude d') }}
            {{ Form::text('longitude_d', $sarsData->longitude_d, array('class' => 'form-control mb-3')) }}

            {{ Form::label('longitude_m', 'Longitude m') }}
            {{ Form::text('longitude_m', $sarsData->longitude_m, array('class' => 'form-control mb-3')) }}

            {{ Form::label('longitude_s', 'Longitude s') }}
            {{ Form::text('longitude_s', $sarsData->longitude_s, array('class' => 'form-control mb-3')) }}

            {{ Form::label('longitude_decimal', 'Longitude decimal') }}
            {{ Form::text('longitude_decimal', $sarsData->longitude_decimal, array('class' => 'form-control mb-3')) }}

            {{ Form::label('altitude', 'Altitude') }}
            {{ Form::text('altitude', $sarsData->altitude, array('class' => 'form-control mb-3')) }}

            {{ Form::label('design_capacity', 'Design capacity') }}
            {{ Form::text('design_capacity', $sarsData->design_capacity, array('class' => 'form-control mb-3')) }}

            {{ Form::label('catchment_size', 'Catchment size') }}
            {{ Form::text('catchment_size', $sarsData->catchment_size, array('class' => 'form-control mb-3')) }}

            {{ Form::label('gdp', 'Gdp') }}
            {{ Form::text('gdp', $sarsData->gdp, array('class' => 'form-control mb-3')) }}

            {{ Form::label('people_recovered', 'People recovered') }}
            {{ Form::text('people_recovered', $sarsData->people_recovered, array('class' => 'form-control mb-3')) }}

            {{ Form::label('people_positive_past', 'People positive past') }}
            {{ Form::text('people_positive_past', $sarsData->people_positive_past, array('class' => 'form-control mb-3')) }}

            {{ Form::label('people_recovered_past', 'People recovered past') }}
            {{ Form::text('people_recovered_past', $sarsData->people_recovered_past, array('class' => 'form-control mb-3')) }}

            {{ Form::label('sample_matrix', 'Sample matrix') }}
            {{ Form::text('sample_matrix', $sarsData->sample_matrix, array('class' => 'form-control mb-3')) }}

            {{ Form::label('sample_from_hour', 'Sample from hour') }}
            {{ Form::text('sample_from_hour', $sarsData->sample_from_hour, array('class' => 'form-control mb-3')) }}

            {{ Form::label('sample_to_hour', 'Sample to hour') }}
            {{ Form::text('sample_to_hour', $sarsData->sample_to_hour, array('class' => 'form-control mb-3')) }}

            {{ Form::label('sample_to_day', 'Sample to day') }}
            {{ Form::text('sample_to_day', $sarsData->sample_to_day, array('class' => 'form-control mb-3')) }}

            {{ Form::label('sample_to_month', 'Sample to month') }}
            {{ Form::text('sample_to_month', $sarsData->sample_to_month, array('class' => 'form-control mb-3')) }}

            {{ Form::label('sample_to_year', 'Sample to year') }}
            {{ Form::text('sample_to_year', $sarsData->sample_to_year, array('class' => 'form-control mb-3')) }}

            {{ Form::label('type_of_sample', 'Type of sample') }}
            {{ Form::text('type_of_sample', $sarsData->type_of_sample, array('class' => 'form-control mb-3')) }}

            {{ Form::label('type_of_composite_sample', 'Type of composite sample') }}
            {{ Form::text('type_of_composite_sample', $sarsData->type_of_composite_sample, array('class' => 'form-control mb-3')) }}

            {{ Form::label('sample_interval', 'Sample interval') }}
            {{ Form::text('sample_interval', $sarsData->sample_interval, array('class' => 'form-control mb-3')) }}

            {{ Form::label('flow_total', 'Flow total') }}
            {{ Form::text('flow_total', $sarsData->flow_total, array('class' => 'form-control mb-3')) }}

            {{ Form::label('flow_minimum', 'Flow minimum') }}
            {{ Form::text('flow_minimum', $sarsData->flow_minimum, array('class' => 'form-control mb-3')) }}

            {{ Form::label('flow_maximum', 'Flow maximum') }}
            {{ Form::text('flow_maximum', $sarsData->flow_maximum, array('class' => 'form-control mb-3')) }}

            {{ Form::label('temperature', 'Temperature') }}
            {{ Form::text('temperature', $sarsData->temperature, array('class' => 'form-control mb-3')) }}

            {{ Form::label('cod', 'Cod') }}
            {{ Form::text('cod', $sarsData->cod, array('class' => 'form-control mb-3')) }}

            {{ Form::label('total_n_nh4_n', 'Total n nh4 n') }}
            {{ Form::text('total_n_nh4_n', $sarsData->total_n_nh4_n, array('class' => 'form-control mb-3')) }}

            {{ Form::label('tss', 'Tss') }}
            {{ Form::text('tss', $sarsData->tss, array('class' => 'form-control mb-3')) }}

            {{ Form::label('dry_weather_conditions', 'Dry weather conditions') }}
            {{ Form::text('dry_weather_conditions', $sarsData->dry_weather_conditions, array('class' => 'form-control mb-3')) }}

            {{ Form::label('last_rain_event', 'Last rain event') }}
            {{ Form::text('last_rain_event', $sarsData->last_rain_event, array('class' => 'form-control mb-3')) }}

            {{ Form::label('associated_phenotype', 'Associated phenotype') }}
            {{ Form::text('associated_phenotype', $sarsData->associated_phenotype, array('class' => 'form-control mb-3')) }}

            {{ Form::label('genetic_marker', 'Genetic marker') }}
            {{ Form::text('genetic_marker', $sarsData->genetic_marker, array('class' => 'form-control mb-3')) }}

            {{ Form::label('date_of_sample_preparation', 'Date of sample preparation') }}
            {{ Form::text('date_of_sample_preparation', $sarsData->date_of_sample_preparation, array('class' => 'form-control mb-3')) }}

            {{ Form::label('storage_of_sample', 'Storage of sample') }}
            {{ Form::text('storage_of_sample', $sarsData->storage_of_sample, array('class' => 'form-control mb-3')) }}

            {{ Form::label('volume_of_sample', 'Volume of sample') }}
            {{ Form::text('volume_of_sample', $sarsData->volume_of_sample, array('class' => 'form-control mb-3')) }}

            {{ Form::label('internal_standard_used1', 'Internal standard used1') }}
            {{ Form::text('internal_standard_used1', $sarsData->internal_standard_used1, array('class' => 'form-control mb-3')) }}

            {{ Form::label('method_used_for_sample_preparation', 'Method used for sample preparation') }}
            {{ Form::text('method_used_for_sample_preparation', $sarsData->method_used_for_sample_preparation, array('class' => 'form-control mb-3')) }}

            {{ Form::label('date_of_rna_extraction', 'Date of rna extraction') }}
            {{ Form::text('date_of_rna_extraction', $sarsData->date_of_rna_extraction, array('class' => 'form-control mb-3')) }}

            {{ Form::label('method_used_for_rna_extraction', 'Method used for rna extraction') }}
            {{ Form::text('method_used_for_rna_extraction', $sarsData->method_used_for_rna_extraction, array('class' => 'form-control mb-3')) }}

            {{ Form::label('internal_standard_used2', 'Internal standard used2') }}
            {{ Form::text('internal_standard_used2', $sarsData->internal_standard_used2, array('class' => 'form-control mb-3')) }}

            {{ Form::label('rna1', 'RNA 1') }}
            {{ Form::text('rna1', $sarsData->rna1, array('class' => 'form-control mb-3')) }}

            {{ Form::label('rna2', 'RNA 2') }}
            {{ Form::text('rna2', $sarsData->rna2, array('class' => 'form-control mb-3')) }}

            {{ Form::label('replicates1', 'Replicates 1') }}
            {{ Form::text('replicates1', $sarsData->replicates1, array('class' => 'form-control mb-3')) }}

            {{ Form::label('analytical_method_type', 'Analytical method type') }}
            {{ Form::text('analytical_method_type', $sarsData->analytical_method_type, array('class' => 'form-control mb-3')) }}

            {{ Form::label('analytical_method_type_other', 'Analytical method type other') }}
            {{ Form::text('analytical_method_type_other', $sarsData->analytical_method_type_other, array('class' => 'form-control mb-3')) }}

            {{ Form::label('date_of_analysis', 'Date of analysis') }}
            {{ Form::text('date_of_analysis', $sarsData->date_of_analysis, array('class' => 'form-control mb-3')) }}

            {{ Form::label('lod1', 'Lod 1') }}
            {{ Form::text('lod1', $sarsData->lod1, array('class' => 'form-control mb-3')) }}

            {{ Form::label('lod2', 'Lod 2') }}
            {{ Form::text('lod2', $sarsData->lod2, array('class' => 'form-control mb-3')) }}

            {{ Form::label('loq1', 'Loq 1') }}
            {{ Form::text('loq1', $sarsData->loq1, array('class' => 'form-control mb-3')) }}

            {{ Form::label('loq2', 'Loq 2') }}
            {{ Form::text('loq2', $sarsData->loq2, array('class' => 'form-control mb-3')) }}

            {{ Form::label('uncertainty_of_the_quantification', 'Uncertainty of the quantification') }}
            {{ Form::text('uncertainty_of_the_quantification', $sarsData->uncertainty_of_the_quantification, array('class' => 'form-control mb-3')) }}

            {{ Form::label('efficiency', 'Efficiency') }}
            {{ Form::text('efficiency', $sarsData->efficiency, array('class' => 'form-control mb-3')) }}

            {{ Form::label('rna3', 'RNA 3') }}
            {{ Form::text('rna3', $sarsData->rna3, array('class' => 'form-control mb-3')) }}

            {{ Form::label('pos_control_used', 'Pos control used') }}
            {{ Form::text('pos_control_used', $sarsData->pos_control_used, array('class' => 'form-control mb-3')) }}

            {{ Form::label('replicates2', 'Replicates 2') }}
            {{ Form::text('replicates2', $sarsData->replicates2, array('class' => 'form-control mb-3')) }}

            {{ Form::label('comment', 'Comment') }}
            {{ Form::text('comment', $sarsData->comment, array('class' => 'form-control mb-3')) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}

            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection('content')