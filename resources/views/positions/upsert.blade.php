@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">{{ __('positions.add_new_position') }}</h3>

    @if($create == true)
    {{ Form::open(['route' => 'positions.store']) }}
    @else
    {{ Form::model($position, ['route' => ['positions.update', $position->id], 'method' => 'PUT']) }}
    @endif

    @include('_templates.form-text-position', ['space' => 'position', 'tag' => 'name'])

    {{ Form::submit(__('general.submit'), array('class' => 'btn btn-sm btn-primary mt-3')) }}

    {{ Form::close() }}

</div>

@endsection