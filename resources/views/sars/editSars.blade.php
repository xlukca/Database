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

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}

            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection('content')