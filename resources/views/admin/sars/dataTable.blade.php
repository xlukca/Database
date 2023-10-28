@extends('layouts.app')
@section('content')

<style>th, td {text-align: center;}</style>


<h1>Database - SARS-CoV-2</h1>
  
<div class="form-group">

        <table class="table table-striped table-hover" id = "dataTable">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <thead>
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>ID</th>
                        <th>Sampling Date</th>
                        <th>Gene copy [number/mL of sample]</th>
                        <th>Gene copy [number/ng of RNA]</th>
                        <th>Ct #</th>
                        <th>Sampling Site/Station</th>
                        <th>Population Served</th>
                        <th>No. of people SARS-CoV-2 POSITIVE</th>
                        <th>Country</th>
                        <th>Action Edit</th>
                        <th>Action Delete</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach ($sarsData as $s)
                            <tr>
                                <td>
                                    @if(!isset($s->sars->file_id))
                                    <input type="checkbox" name="files[]" value="{{ $s->id }}" form="form3" multiple>
                                    @endif
                                </td>
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->sample_from_year }}-{{ $s->sample_from_month }}-{{ $s->sample_from_day }}</td>
                                <td>{{ $s->gene1 }}</td>
                                <td>{{ $s->gene2 }}</td>
                                <td>{{ $s->ct }}</td>
                                <td>{{ $s->station_name }}</td>
                                <td>{{ $s->population_served }}</td>
                                <td>{{ $s->people_positive }}</td>
                                <td>{{ $s->name_of_country }}</td>
                                <td><a class="btn btn-info" href="{{ route('dataTable.edit', $s->id) }}">Edit</a></td>
                                <td>
                                    {!! Form::open(array('route' => ['dataTable.destroy', $s->id], 'method'=>'DELETE')) !!}
                                    {!! Form::submit('delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the file.")')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div> 

<script>
    document.getElementById('select-all').addEventListener('change', function() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = this.checked;
        }
    });
</script>

@endsection


