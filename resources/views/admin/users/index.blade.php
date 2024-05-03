@extends('admin.layouts.app')
@section('content')

<div class="container">
<h3 class="mb-5">List of Users</h3>
<p><a href="{{ route('users.create') }}" class="btn btn-secondary">Add New User</a></p>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Street</th>
            <th>Street Number</th>
            <th>City</th>
            <th>Postcode</th>
            <th>Position</th>
            <th>Is Admin</th>
            <th>Action</th>
            <th>Action</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $d)
        <tr @if($d->trashed())class="table-danger"@endif>
            <td>{{ $d->id }}</td>
            <td>{{ $d->first_name }}</td>
            <td>{{ $d->last_name }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->street }}</td>
            <td>{{ $d->street_number }}</td>
            <td>{{ $d->city }}</td>
            <td>{{ $d->postcode }}</td>
            <td>{{ $d->position->name ?? 'SoftDeletes' }}</td>
            <td>{{ $d->is_admin }}</td>
            <td>@if(!$d->trashed())<a class="btn btn-info" href="{{ route('users.edit', $d->id) }}">{{ __('general.edit') }}</a>@endif</td>
            <td>
                @if(!$d->trashed())
                {!! Form::open(array('route' => ['users.destroy', $d->id], 'method'=>'DELETE')) !!}
                {!! Form::submit(__('general.delete'), array('class' => 'btn btn-danger', 'onclick' => 'return confirm("' . 'Do you want to temporarily delete the position?' . '")')) !!}
                {!! Form::close() !!}
                @else
                {!! Form::open(array('route' => ['users.forceDestroy', $d->id], 'method'=>'DELETE')) !!}
                {!! Form::submit(__('general.permanent_delete'), array('class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("' . 'Do you want to permanently delete the position?' . '")')) !!}
                {!! Form::close() !!}
                {!! Form::open(array('route' => ['users.restore', $d->id], 'method'=>'POST')) !!}
                {!! Form::submit(__('general.restore'), array('class' => 'btn btn-success btn-sm mt-1')) !!}
                {!! Form::close() !!}
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>    
</table>
{{ $users->links() }}
</div>

@endsection