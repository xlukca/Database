@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">{{ __('users.add_new_user') }}</h3>

    @if($create == true)
    {{ Form::open(['route' => 'users.store']) }}
    @else
    {{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) }}
    @endif

    @include('_templates.form-text-position', ['space' => 'user', 'tag' => 'first_name'])
    @include('_templates.form-text-position', ['space' => 'user', 'tag' => 'last_name'])
    @include('_templates.form-text-position', ['space' => 'user', 'tag' => 'email'])
    @include('_templates.form-text-position', ['space' => 'user', 'tag' => 'street'])
    @include('_templates.form-text-position', ['space' => 'user', 'tag' => 'street_number'])
    @include('_templates.form-text-position', ['space' => 'user', 'tag' => 'city'])
    @include('_templates.form-text-position', ['space' => 'user', 'tag' => 'postcode'])
    @include('_templates.form-select', ['space' => 'user', 'tag' => 'position_id', 'list' => $positionList])
    @include('_templates.form-select', ['space' => 'user', 'tag' => 'is_admin', 'list' => [0 => __('User'), 1 => __('Admin')]])

    <br>
    {{ Form::submit(__('general.submit'), array('class' => 'btn btn-sm btn-primary mt-3')) }}

    {{ Form::close() }}

</div>

@endsection