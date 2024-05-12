@extends('admin.layouts.app')
@section('content')

<style>th, td {text-align: center;}</style>


<h1>Database - SARS-CoV-2</h1>
  
<div class="form-group">

        <table class="table table-striped table-hover" id = "dataTable">
            @csrf
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
                        <th>Action</th>
                        <th>Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach ($sarsData as $s)
                            <tr @if($s->trashed())class="table-danger"@endif>
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->sample_from_year }}-{{ $s->sample_from_month }}-{{ $s->sample_from_day }}</td>
                                <td>{{ $s->gene1 }}</td>
                                <td>{{ $s->gene2 }}</td>
                                <td>{{ $s->ct }}</td>
                                <td>{{ $s->station_name }}</td>
                                <td>{{ $s->population_served }}</td>
                                <td>{{ $s->people_positive }}</td>
                                <td>{{ $s->name_of_country }}</td>
                                <td>@if(!$s->trashed())<a class="btn btn-info" href="{{ route('sars.edit', $s->id) }}">Edit</a>@endif</td>
                                <td>
                                    @if($s->trashed())
                                    {!! Form::open(array('route' => ['sars.forceDestroy', $s->id], 'method'=>'DELETE')) !!}
                                    {!! Form::submit('Permanent Delete', array('class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("You are about to PERMANENTLY delete the record.")')) !!}
                                    {!! Form::close() !!}
                                    {!! Form::open(array('route' => ['sars.restore', $s->id], 'method'=>'POST')) !!}
                                    {!! Form::submit('Restore', array('class' => 'btn btn-success btn-sm mt-1')) !!}
                                    {!! Form::close() !!}
                                    @else
                                    {!! Form::open(array('route' => ['sars.destroy', $s->id], 'method'=>'DELETE')) !!}
                                    {!! Form::submit('Delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the record.")')) !!}
                                    {!! Form::close() !!}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div> 

@endsection


