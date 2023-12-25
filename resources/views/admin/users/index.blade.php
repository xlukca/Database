@extends('admin.layouts.app')
@section('content')

<div class="container">
<h3 class="mb-5">{{ __('users.list_of_users') }}</h3>
<p><a href="{{ route('users.create') }}" class="btn btn-secondary">{{ __('users.add_new_user') }}</a></p>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('users.first_name') }}</th>
            <th>{{ __('users.last_name') }}</th>
            <th>{{ __('users.email') }}</th>
            <th>{{ __('users.street') }}</th>
            <th>{{ __('users.street_number') }}</th>
            <th>{{ __('users.city') }}</th>
            <th>{{ __('users.postcode') }}</th>
            <th>{{ __('users.position') }}</th>
            <th>{{ __('users.is_admin') }}</th>
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
                {!! Form::submit(__('general.delete'), array('class' => 'btn btn-danger', 'onclick' => 'return confirm("' . __('users.confirm_delete') . '")')) !!}
                {!! Form::close() !!}
                @else
                {!! Form::open(array('route' => ['users.forceDestroy', $d->id], 'method'=>'DELETE')) !!}
                {!! Form::submit(__('general.permanent_delete'), array('class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("' . __('users.confirm_permanently_delete') . '")')) !!}
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