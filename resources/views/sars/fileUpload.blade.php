

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Sars File Upload</title>
    <style>
        .container {
            max-width: 800px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
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
                <input type="file" name="files[]" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile"></label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload File
            </button>
        </form>
    </div>    
</body>

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
                <form action="{{route('show.excel')}}" method="get" enctype="multipart/form-data">
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
                                        <td><input type="checkbox" name="files[]" value="{{ $file->id }}"></td>
                                        <td>{{ $file->name }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div> 
            <br>
            <br>
</html>