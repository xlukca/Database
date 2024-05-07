@extends('admin.layouts.app')
@section('content')



<h1>Database - Substance</h1>

<div class="form-group">

        <table class="table table-striped table-hover" id = "dataTable">
            @csrf
                <thead>
                    <tr>
                        <th>{{ __('ID') }}</th>
                        <th>{{ __('susdat.susdat_id') }}</th>
                        <th>{{ __('susdat.item') }}</th>
                        <th>{{ __('susdat.old_value') }}</th>
                        <th>{{ __('susdat.new_value') }}</th>
                        <th>{{ __('susdat.user') }}</th>
                        <th>{{ __('susdat.editing_time') }}</th>
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


