@extends('user.layouts.app')
@section('content')


<h1 class="mx-3 mt-3 mb-5">Database - Substance Data</h1>
  
<div class="mx-3 mt-3 mb-5">

            <table class="table table-striped yajra-datatable">
            {{-- <table class="table table-striped"> --}}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>CAS RN</th>
                        <th>StdInChIKey</th>
                        <th>DTXSID</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($susdat as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->cas_rn }}</td>
                            <td>{{ $s->stdinchikey }}</td>
                            <td>{{ $s->dtxsid }}</td>
                        </tr>
                        @endforeach  --}}
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
          orderable: true, 
          searchable: true,
          ajax: "{{ route('userIndexSusdat') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'cas_rn', name: 'cas_rn'},
              {data: 'stdinchikey', name: 'stdinchikey'},
              {data: 'dtxsid', name: 'dtxsid'},
          ]
      });
    });
  </script>

@endsection


