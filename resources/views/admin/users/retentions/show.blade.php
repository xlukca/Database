@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Login Information: {{$retentions[0]->user_id}}</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>IP</th>
                <th>Time</th>
                <th>Agent</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($retentions as $r)
            <tr>
                <td>{{ $r->login_ip }}</td>
                <td>{{ $r->login_time }}</td>
                <td>{{ $r->user_agent }}</td>
                </td>
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>

@endsection