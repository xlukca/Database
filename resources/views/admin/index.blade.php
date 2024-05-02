@extends('admin.layouts.app')
@section('content')

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="mt-4 col-md-8">
                <div class="card">
                    <div class="card-header">Welcome in database system</div>
                </div>
            </div>
        </div>

        <div class="row margin-bottom-20" style="margin-top: 60px;">
            <div class="col-md-4 col-md-offset-1 offset-md-2">
                <div class="content-boxes-v5 md-margin-bottom-30">
                    <div class="overflow-h">
                        <a class="link" href="{{ route('searchSars') }}">
                            <h3 class="no-top-space">SARS-CoV-2</h3>
                        </a>
                        <p>A database with the latest information on SARS-CoV-2 in sewage across Europe and internationally; including a common protocol for sample collection, storage, extraction, analysis and data sharing to support the development of an international comparable data set.</p>
                    </div>
                </div>
            </div>

            
            <div class="col-md-6 align-self-start">
                <div class="content-boxes-v5 md-margin-bottom-30">
                    <div class="overflow-h">
                        <a class="link" href="{{ route('userIndexSusdata') }}">
                            <h3 class="no-top-space">Substance Database</h3>
                        </a>
                        <p>A merged list of NORMAN substances; Central Database to access various lists of substances for suspect screening and prioritisation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection