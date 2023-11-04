@extends('admin.layouts.app')
@section('content')

<style>th, td {text-align: center;}</style>

<h1>Database - SARS-CoV-2</h1>


<div class="headline mt-3 mb-3"><h3>Search criteria</h3></div> 

<form action="{{ route('searchSars') }}" method="GET">
    
    <div class="row mt-2 mb-4">
        <div class="col-md-2">
            <label for="query" class="form-label">Country</label>  
            <select class="form-control" name="name_of_country[]" id="query" multiple>
            @foreach($countries as $country)
            <option>{{ $country->name_of_country }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label for="query" class="form-label">Sample Matrix</label>  
            <select class="form-control" name="sample_matrix[]" id="query" multiple>
            @foreach($matrixes as $matrix)
            <option>{{ $matrix->sample_matrix }}</option>
            @endforeach
            </select>
        </div>
      
        <div class="col-md-3">
            <label for="query" class="form-label">Station name</label>  
            <select class="form-control" name="station_name[]" id="query" multiple>
            @foreach($stations as $station)
            <option>{{ $station->station_name }}</option>
            @endforeach
            </select>
        </div>
         
        <div class="col-md-2">
            <label for="query" class="form-label">Sample From Year</label>  
            <select class="form-control" name="sample_from_year[]" id="query" multiple>
            @foreach($years as $year)
            <option>{{ $year->sample_from_year }}</option>
            @endforeach
            </select>  
        </div>
    </div>

   <div class="row">
        <div class="col-md-7">
            <label for="query" class="form-label">Data Provider</label>  
            <select class="form-control" name="data_provider[]" id="query" multiple>
            @foreach($providers as $provider)
            <option>{{ $provider->data_provider }}</option>
            @endforeach
            </select>
        </div>  
    </div>   
   
    <div class="row mt-3 mb-5">
        <div class="col-md-10">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
</form>

<table class="table table-bordered">

@if(count($results) > 0)
    <thead>
    <tr>
        <th>ID</th>
        <th>Sampling Date</th>
        <th>Gene copy [number/mL of sample]</th>
        <th>Gene copy [number/ng of RNA]</th>
        <th>Ct #</th>
        <th>Sampling Site/Station</th>
        <th>Population Served</th>
        <th>No. of people SARS-CoV-2 POSITIVE</th>
        <th>Country</th>      
        </tr>
    </thead>
    <tbody>
        @foreach($results as $result)
        <tr>
            <td>{{ $result->id }}</td>
            <td>{{ $result->sample_from_year }}-{{ $result->sample_from_month }}-{{ $result->sample_from_day }}</td>
            <td>{{ $result->gene1 }}</td>
            <td>{{ $result->gene2 }}</td>
            <td>{{ $result->ct }}</td>
            <td>{{ $result->station_name }}</td>
            <td>{{ $result->population_served }}</td>
            <td>{{ $result->people_positive }}</td>
            <td>{{ $result->name_of_country }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
    <p>No results found</p>
@endif


@endsection