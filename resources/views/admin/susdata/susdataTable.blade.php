@extends('layouts.app')
@section('content')

<style>th, td {text-align: center;}</style>


<h1>Database - Substance Data</h1>
  
<div class="form-group">

        <table class="table table-striped table-hover" id="dataTable">
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>CAS_RN</th>
                        <th>StdInChIKey</th>
                        <th>DTXSID</th>
                        <th>Action Edit</th>
                        <th>Action Delete</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach ($susdata as $sus)
                            <tr>
                                <td>{{ $sus->id }}</td>
                                <td>{{ $sus->name }}</td>
                                <td>{{ $sus->cas_rn }}</td>
                                <td>{{ $sus->stdinchikey }}</td>
                                <td>{{ $sus->dtxsid }}</td>
                                <td><a class="btn btn-info" href="{{ route('susdataTable.edit', $sus->id) }}">Edit</a></td>
                                <td>
                                    {!! Form::open(array('route' => ['susdataTable.destroy', $sus->id], 'method'=>'DELETE')) !!}
                                    {!! Form::submit('delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the file.")')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $susdata->links() }}
</div> 


@endsection


