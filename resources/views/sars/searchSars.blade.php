@extends('layouts.app')
@section('content')

<style>th, td {text-align: center;}</style>

<h1>Database - SARS-CoV-2</h1>

<br>
<div class="headline"><h3>Search criteria</h3></div> 
<br>
<form action="{{ route('search') }}" method="GET">
    
       
        <div class="col-md-2">
            <div class="row">Country</div>
                <div class="form-group">
                    <label class="select select-multiple"></label>
                    <select name="query" multiple>
                    @foreach($results as $result)
                    <option>{{ $result->name_of_country }}</option>
                    @endforeach
                    </select>
                </div>
            <div class="row">Sample Matrix</div>
                <div class="form-group">
                    <label class="select select-multiple"></label>
                    <select name="query" multiple>
                    @foreach($results as $result)
                    <option>{{ $result->sample_matrix }}</option>
                    @endforeach
                    </select>
                </div>
            <div class="row">Station name</div>  
                <div class="form-group">
                    <label class="select select-multiple"></label>
                    <select name="query" multiple>
                    @foreach($results as $result)
                    <option>{{ $result->station_name }}</option>
                    @endforeach
                    </select>
                </div>
            <div class="row">Sample From Year</div>  
                <div class="form-group">
                    <label class="select select-multiple"></label>
                    <select name="query" multiple>
                    @foreach($results as $result)
                    <option>{{ $result->sample_from_year }}</option>
                    @endforeach
                    </select>  
                 </div>
            </div>

        <div class="col-md-12">
            <div class="row">Data Provider</div>  
                 <div class="form-group">
                    <label class="select select-multiple"></label>
                    <select name="query" multiple>
                    @foreach($results as $result)
                    <option>{{ $result->data_provider }}</option>
                    @endforeach
                    </select>
                </div>
        </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Search</button>
    </div>
    <div class="form-group">
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
                            <tr>
                     @foreach($results as $result)
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
</form>
</div>








































<!--
<div class="breadcrumbs">
    <div class="container">
            <h1 class="pull-left">
                Database - SARS-CoV-2
            <br>
            
            </h1>
            <h6>Search</h6>
    </div>
</div>

<div class="container content height-500">
    <form class="sky-form">
        <div class="headline">
            <h3>Search criteria</h3>
        </div>
            <div class="margin-bottom-20">
                <div class="row">
                    <div class="col col-4">
                        <label class="label">Country</label>
                        <label class="select select-multiple">
                            <select name="country[]" size="[]" multiple></select>
                        </label>
                    </div>
                </div>
            </div>





    </form>
</div>
-->


@endsection