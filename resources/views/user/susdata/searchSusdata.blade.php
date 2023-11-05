@extends('user.layouts.app')
@section('content')

<style>th, td {text-align: center;}</style>

<h1 class="mx-3 mt-3 mb-5">Database - Substances</h1>


<div class="headline mx-4 mt-3 mb-3"><h3>Search criteria</h3></div> 

<form action="{{ route('searchSusdata') }}" method="GET">
    
    <div class="mx-3 row mt-2 mb-4">
        <div class="col-md-2">
            <label for="query" class="form-label">ID</label>  
            <select class="form-control" name="id[]" id="query" multiple>
            @foreach($id as $i)
            <option>{{ $i->id }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label for="query" class="form-label">Name</label>  
            <select class="form-control" name="name[]" id="query" multiple>
            @foreach($name as $n)
            <option>{{ $n->name }}</option>
            @endforeach
            </select>
        </div>
      
        <div class="col-md-3">
            <label for="query" class="form-label">CAS RN</label>  
            <select class="form-control" name="cas_rn[]" id="query" multiple>
            @foreach($cas_rn as $c)
            <option>{{ $c->cas_rn }}</option>
            @endforeach
            </select>
        </div>
         
        <div class="col-md-2">
            <label for="query" class="form-label">StdInChIKey</label>  
            <select class="form-control" name="stdinchikey[]" id="query" multiple>
            @foreach($stdinchikey as $s)
            <option>{{ $s->stdinchikey }}</option>
            @endforeach
            </select>  
        </div>
    </div>

   <div class="mx-3 row">
        <div class="col-md-7">
            <label for="query" class="form-label">DTXSID</label>  
            <select class="form-control" name="dtxsid[]" id="query" multiple>
            @foreach($dtxsid as $d)
            <option>{{ $d->dtxsid }}</option>
            @endforeach
            </select>
        </div>  
    </div>   
   
    <div class="mx-3 row mt-3 mb-5">
        <div class="col-md-10">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
</form>

<div class="mx-3 mb-5">
    <table class="table table-striped" id = "dataTable">

    @if(count($results) > 0)
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
            @foreach($results as $result)
            <tr>
                <td>{{ $result->id }}</td>
                <td>{{ $result->name }}</td>
                <td>{{ $result->cas_rn }}</td>
                <td>{{ $result->stdinchikey }}</td>
                <td>{{ $result->dtxsid }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <p>No results found</p>
@endif


@endsection