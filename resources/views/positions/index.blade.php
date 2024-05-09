@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">{{ __('positions.list_of_positions') }}</h3>
    <p><a href="{{ route('positions.create') }}" class="btn btn-secondary">{{ __('positions.add_new_position') }}</a></p>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{ __('positions.name') }}</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($positions as $d)
            <tr @if($d->trashed())class="table-danger"@endif>
                <td>{{ $d->id }}</td>
                <td>{{ $d->name }}</td>
                <td>@if(!$d->trashed())<a class="btn btn-info" href="{{ route('positions.edit', $d->id) }}">{{ __('general.edit') }}</a>@endif</td>
                <td>
                    @if(!$d->trashed())
                    {!! Form::open(array('route' => ['positions.destroy', $d->id], 'method'=>'DELETE')) !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("' . 'Do you want to temporarily delete the position?' . '")')) !!}
                    {!! Form::close() !!}
                    @else
                    {!! Form::open(array('route' => ['positions.forceDestroy', $d->id], 'method'=>'DELETE')) !!}
                    {!! Form::submit('Permanent Delete', array('class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("' . 'Do you want to permanently delete the position?' . '")')) !!}
                    {!! Form::close() !!}
                    {!! Form::open(array('route' => ['positions.restore', $d->id], 'method'=>'POST')) !!}
                    {!! Form::submit('Restore', array('class' => 'btn btn-success btn-sm mt-1')) !!}
                    {!! Form::close() !!}
                    @endif                
                </td>
            </tr>
            @endforeach
        </tbody>    
    </table>
    {{ $positions->links() }}
</div>

@endsection