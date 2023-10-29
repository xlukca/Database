@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Update of the Sars</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::model($sarsData, ['route' => ['dataTable.update', $sarsData->id], 'method' => 'PUT']) }}

            @include('_templates.form-text', ['field_name' => 'sample_from_year', 'field_name_text' => 'Sample from Year'])
            @include('_templates.form-text', ['field_name' => 'sample_from_month', 'field_name_text' => 'Sample from Month'])
            @include('_templates.form-text', ['field_name' => 'sample_from_day', 'field_name_text' => 'Sample from Day'])
            @include('_templates.form-text', ['field_name' => 'gene1', 'field_name_text' => 'Gene copy [number/mL of sample]'])
            @include('_templates.form-text', ['field_name' => 'gene2', 'field_name_text' => 'Gene copy [number/ng of RNA]'])
            @include('_templates.form-text', ['field_name' => 'ct', 'field_name_text' => 'Ct #'])
            @include('_templates.form-text', ['field_name' => 'station_name', 'field_name_text' => 'Sampling Site/Station'])
            @include('_templates.form-text', ['field_name' => 'population_served', 'field_name_text' => 'Population Served'])
            @include('_templates.form-text', ['field_name' => 'people_positive', 'field_name_text' => 'No. of people SARS-CoV-2 POSITIVE'])
            @include('_templates.form-text', ['field_name' => 'name_of_country', 'field_name_text' => 'Country'])
            @include('_templates.form-text', ['field_name' => 'type_of_data', 'field_name_text' => 'Type of data'])
            @include('_templates.form-text', ['field_name' => 'data_provider', 'field_name_text' => 'Data provider'])
            @include('_templates.form-text', ['field_name' => 'contact_person', 'field_name_text' => 'Contact person'])
            @include('_templates.form-text', ['field_name' => 'address_of_contact', 'field_name_text' => 'Address of contact'])
            @include('_templates.form-text', ['field_name' => 'email', 'field_name_text' => 'Email'])
            @include('_templates.form-text', ['field_name' => 'laboratory', 'field_name_text' => 'Laboratory'])
            @include('_templates.form-text', ['field_name' => 'name_of_city', 'field_name_text' => 'Name of city'])
            @include('_templates.form-text', ['field_name' => 'national_code', 'field_name_text' => 'National code'])
            @include('_templates.form-text', ['field_name' => 'relevant_ec_code_wise', 'field_name_text' => 'Relevant ec code wise'])
            @include('_templates.form-text', ['field_name' => 'relevant_ec_code_other', 'field_name_text' => 'Relevant ec code other'])
            @include('_templates.form-text', ['field_name' => 'other_code', 'field_name_text' => 'Other code'])
            @include('_templates.form-text', ['field_name' => 'latitude', 'field_name_text' => 'Latitude'])
            @include('_templates.form-text', ['field_name' => 'latitude_d', 'field_name_text' => 'Latitude d'])
            @include('_templates.form-text', ['field_name' => 'latitude_m', 'field_name_text' => 'Latitude m'])
            @include('_templates.form-text', ['field_name' => 'latitude_s', 'field_name_text' => 'Latitude s'])
            @include('_templates.form-text', ['field_name' => 'latitude_decimal', 'field_name_text' => 'Latitude decimal'])
            @include('_templates.form-text', ['field_name' => 'longitude', 'field_name_text' => 'Longitude'])
            @include('_templates.form-text', ['field_name' => 'longitude_d', 'field_name_text' => 'Longitude d'])
            @include('_templates.form-text', ['field_name' => 'longitude_m', 'field_name_text' => 'Longitude m'])
            @include('_templates.form-text', ['field_name' => 'longitude_s', 'field_name_text' => 'Longitude s'])
            @include('_templates.form-text', ['field_name' => 'longitude_decimal', 'field_name_text' => 'Longitude decimal'])
            @include('_templates.form-text', ['field_name' => 'altitude', 'field_name_text' => 'Altitude'])
            @include('_templates.form-text', ['field_name' => 'design_capacity', 'field_name_text' => 'Design capacity'])
            @include('_templates.form-text', ['field_name' => 'catchment_size', 'field_name_text' => 'Catchment size'])
            @include('_templates.form-text', ['field_name' => 'gdp', 'field_name_text' => 'Gdp'])
            @include('_templates.form-text', ['field_name' => 'people_recovered', 'field_name_text' => 'People recovered'])
            @include('_templates.form-text', ['field_name' => 'people_positive_past', 'field_name_text' => 'People positive past'])
            @include('_templates.form-text', ['field_name' => 'people_recovered_past', 'field_name_text' => 'People recovered past'])
            @include('_templates.form-text', ['field_name' => 'sample_matrix', 'field_name_text' => 'Sample matrix'])
            @include('_templates.form-text', ['field_name' => 'sample_from_hour', 'field_name_text' => 'Sample from hour'])
            @include('_templates.form-text', ['field_name' => 'sample_to_hour', 'field_name_text' => 'Sample to hour'])
            @include('_templates.form-text', ['field_name' => 'sample_to_day', 'field_name_text' => 'Sample to day'])
            @include('_templates.form-text', ['field_name' => 'sample_to_month', 'field_name_text' => 'Sample to month'])
            @include('_templates.form-text', ['field_name' => 'sample_to_year', 'field_name_text' => 'Sample to year'])
            @include('_templates.form-text', ['field_name' => 'type_of_sample', 'field_name_text' => 'Type of sample'])
            @include('_templates.form-text', ['field_name' => 'type_of_composite_sample', 'field_name_text' => 'Type of composite sample'])
            @include('_templates.form-text', ['field_name' => 'sample_interval', 'field_name_text' => 'Sample interval'])
            @include('_templates.form-text', ['field_name' => 'flow_total', 'field_name_text' => 'Flow total'])
            @include('_templates.form-text', ['field_name' => 'flow_minimum', 'field_name_text' => 'Flow minimum'])
            @include('_templates.form-text', ['field_name' => 'flow_maximum', 'field_name_text' => 'Flow maximum'])
            @include('_templates.form-text', ['field_name' => 'temperature', 'field_name_text' => 'Temperature'])
            @include('_templates.form-text', ['field_name' => 'cod', 'field_name_text' => 'Cod'])
            @include('_templates.form-text', ['field_name' => 'total_n_nh4_n', 'field_name_text' => 'Total n nh4 n'])
            @include('_templates.form-text', ['field_name' => 'tss', 'field_name_text' => 'Tss'])
            @include('_templates.form-text', ['field_name' => 'dry_weather_conditions', 'field_name_text' => 'Dry weather conditions'])
            @include('_templates.form-text', ['field_name' => 'last_rain_event', 'field_name_text' => 'Last rain event'])
            @include('_templates.form-text', ['field_name' => 'associated_phenotype', 'field_name_text' => 'Associated phenotype'])
            @include('_templates.form-text', ['field_name' => 'genetic_marker', 'field_name_text' => 'Genetic marker'])
            @include('_templates.form-text', ['field_name' => 'date_of_sample_preparation', 'field_name_text' => 'Date of sample preparation'])
            @include('_templates.form-text', ['field_name' => 'storage_of_sample', 'field_name_text' => 'Storage of sample'])
            @include('_templates.form-text', ['field_name' => 'volume_of_sample', 'field_name_text' => 'Volume of sample'])
            @include('_templates.form-text', ['field_name' => 'internal_standard_used1', 'field_name_text' => 'Internal standard used1'])
            @include('_templates.form-text', ['field_name' => 'method_used_for_sample_preparation', 'field_name_text' => 'Method used for sample preparation'])
            @include('_templates.form-text', ['field_name' => 'date_of_rna_extraction', 'field_name_text' => 'Date of rna extraction'])
            @include('_templates.form-text', ['field_name' => 'method_used_for_rna_extraction', 'field_name_text' => 'Method used for rna extraction'])
            @include('_templates.form-text', ['field_name' => 'internal_standard_used2', 'field_name_text' => 'Internal standard used2'])
            @include('_templates.form-text', ['field_name' => 'rna1', 'field_name_text' => 'RNA 1'])
            @include('_templates.form-text', ['field_name' => 'rna2', 'field_name_text' => 'RNA 2'])
            @include('_templates.form-text', ['field_name' => 'replicates1', 'field_name_text' => 'Replicates 1'])
            @include('_templates.form-text', ['field_name' => 'analytical_method_type', 'field_name_text' => 'Analytical method type'])
            @include('_templates.form-text', ['field_name' => 'analytical_method_type_other', 'field_name_text' => 'Analytical method type other'])
            @include('_templates.form-text', ['field_name' => 'date_of_analysis', 'field_name_text' => 'Date of analysis'])
            @include('_templates.form-text', ['field_name' => 'lod1', 'field_name_text' => 'Lod 1'])
            @include('_templates.form-text', ['field_name' => 'lod2', 'field_name_text' => 'Lod 2'])
            @include('_templates.form-text', ['field_name' => 'loq1', 'field_name_text' => 'Loq 1'])
            @include('_templates.form-text', ['field_name' => 'loq2', 'field_name_text' => 'Loq 2'])
            @include('_templates.form-text', ['field_name' => 'uncertainty_of_the_quantification', 'field_name_text' => 'Uncertainty of the quantification'])
            @include('_templates.form-text', ['field_name' => 'efficiency', 'field_name_text' => 'Efficiency'])
            @include('_templates.form-text', ['field_name' => 'rna3', 'field_name_text' => 'RNA 3'])
            @include('_templates.form-text', ['field_name' => 'pos_control_used', 'field_name_text' => 'Pos control used'])
            @include('_templates.form-text', ['field_name' => 'replicates2', 'field_name_text' => 'Replicates 2'])
            @include('_templates.form-text', ['field_name' => 'comment', 'field_name_text' => 'Comment'])
            
{{-- 
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
 --}}
            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}

            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection('content')