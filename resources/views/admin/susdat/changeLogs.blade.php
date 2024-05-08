@extends('admin.layouts.app')
@section('content')



<h1>Database - Substance</h1>

<div class="form-group">

        <table class="table table-striped table-hover" id = "dataTable">
            @csrf
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Susdat id</th>
                        <th>Item</th>
                        <th>Old value</th>
                        <th>New value</th>
                        <th>User</th>
                        <th>Editing time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach ($changeSusdat as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->susdat_id }}</td>
                                <td>{{ $c->item }}</td>
                                <td>{{ $c->old_value }}</td>
                                <td>{{ $c->new_value }}</td>
                                <td>{!! $c->userChangeLog->full_name !!}</td>
                                <td>{{ $c->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
</div> 

{{-- <script>
    document.getElementById('select-all').addEventListener('change', function() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = this.checked;
        }
    });
</script> --}}

@endsection


