@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">List of Users</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number of logins</th>
                <th>Login information</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{!! $u->full_name ?? '' !!}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->retentions->count() }}</td>
                <td>@if($u->retentions->count())
                    <a href="{{ route('retentions.show', $u->id) }}" class="btn btn-primary">
                        Login Information
                    </a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>

@endsection