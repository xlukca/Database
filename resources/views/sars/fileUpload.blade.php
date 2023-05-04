@extends('layouts.app')
@section('content')

</head>
<body>
    <div class="container mt-5">
        <form action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Sars upload file</h3>
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
            <div class="custom-file">
                <input type="file" name="files[]" class="custom-file-input" id="chooseFile" multiple>
                <label class="custom-file-label" for="chooseFile"></label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload File
            </button>
        </form>
    </div>    


<br>
<br>

<style>th, td {text-align: center;}</style>
        <style>
        .form-group {
            max-width: 1300px;
            margin: 0 auto;
        }
        </style>
            <div class="form-group">
                 <form action="{{route('show.excel')}}" method="get"> 
                            <table class="table table-striped tables">
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>File Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @csrf
                                    @foreach($files as $file)
                                    <tr>
                                        <td><input type="checkbox" name="files[]" value="{{ $file->id }}" multiple></td>
                                        <td>{{ $file->name }}</td>
                                        <td>
                                            {!! Form::open(array('route' => ['file.delete', $file->id], 'method'=>'DELETE')) !!}
                                            {!! Form::submit('delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the file.")')) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        <button type="submit" class="btn btn-success">Submit</button>
                      <!--  <input type="text" name = "file"> -->
                </form>
            </div> 
            <br>
            <br>
            
    </body>
</html>


@endsection