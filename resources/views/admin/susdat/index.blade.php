@extends('admin.layouts.app')
@section('content')

<style>th, td {text-align: center;}</style>

<h1>Database - Substance Data</h1>
  
<div class="form-group">

        <table class="table table-bordered yajra-datatable">
            {{-- @csrf
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
            @endif --}}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>CAS RN</th>
                        <th>StdInChIKey</th>
                        <th>DTXSID</th>
                        <th>Actions</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @csrf
                        @foreach ($susdat as $sus)
                            <tr @if($sus->trashed())class="table-danger"@endif>
                                <td>{{ $sus->id }}</td>
                                <td>{{ $sus->name }}</td>
                                <td>{{ $sus->cas_rn }}</td>
                                <td>{{ $sus->stdinchikey }}</td>
                                <td>{{ $sus->dtxsid }}</td>
                                <td><a class="btn btn-info" href="{{ route('susdat.edit', $sus->id) }}">Edit</a></td>
                                <td>
                                    @if($sus->trashed())
                                    {!! Form::open(array('route' => ['susdat.forceDestroy', $sus->id], 'method'=>'DELETE')) !!}
                                    {!! Form::submit('Permanent Delete', array('class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("You are about to PERMANENTLY delete the record.")')) !!}
                                    {!! Form::close() !!}
                                    {!! Form::open(array('route' => ['susdat.restore', $sus->id], 'method'=>'POST')) !!}
                                    {!! Form::submit('Restore', array('class' => 'btn btn-success btn-sm mt-1')) !!}
                                    {!! Form::close() !!}
                                    @else
                                    {!! Form::open(array('route' => ['susdat.destroy', $sus->id], 'method'=>'DELETE')) !!}
                                    {!! Form::submit('delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the file.")')) !!}
                                    {!! Form::close() !!}
                                    @endif
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
                {{-- {{ $susdat->links() }} --}}
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script type="text/javascript">
    $(function () {
      
      var table = $('.yajra-datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "/admin/susdat",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'cas_rn', name: 'cas_rn'},
              {data: 'stdinchikey', name: 'stdinchikey'},
              {data: 'dtxsid', name: 'dtxsid'},
              {
                  data: 'action', 
                  name: 'action', 
                  orderable: true, 
                  searchable: true
              },
          ],
          "createdRow": function( row, data, dataIndex ) {
            if (data.deleted_at != null) {
                $(row).addClass('table-danger');
            }
          }
      });
    });
  </script>

@endsection


