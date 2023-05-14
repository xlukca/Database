@extends('layouts.app')
@section('content')

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
</div>


@endsection