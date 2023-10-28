@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Update of the Substance Data</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::model($susdata, ['route' => ['susdataTable.update', $susdata->id], 'method' => 'PUT']) }}

            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $susdata->name, array('class' => 'form-control mb-3')) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}

            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection('content')