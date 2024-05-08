@extends('admin.layouts.app')
@section('content')

<h1 class="mx-3 mt-3 mb-5">Database System - REST API</h1>

<div class= "alert alert-warning mx-5">
    <h3>http://127.0.0.1:8000/api/<b style="color: red">module</b>/<b style="color: blue">parameter</b>/<b style="color: brown">values</b>/<b style="color: green">format</b></h3>
</div>

<div class="headline mx-3"><h4><b>Formats</b></h4></div>

<p class="mx-3 margin-bottom-20">REST API provides structured information in two formats specified at the end of the URL path. Results can be formatted as <b style="color: green">JSON</b> and <b style="color: green">XML</b>. Both contain the same information, just in different formats.</p>

<div class="mx-3 headline"><h3><b>Substance Database</b> (module: <span style="color: red"><b>susdat</b></span>)</h3></div>

<div class="mx-3 tag-box tag-box-v2" style="padding-top: 10px; padding-bottom: 10px"> 
    <div class="row cca-api-list">   
        <div class="col-md-12">
            <table class="table table-striped">
                <tbody><tr>
                    <th><b>parameter:</b></th>
                    <td></td>
                    <td><b>value:</b></td>
                </tr>    
                <tr>
                    <th style="color: blue">id</th>
                    <td>ID substance</td>
                    <td>e.g. <span style="color: brown">1 or 251</span></td>
                </tr>
                <tr>
                    <th style="color: blue">name</th>
                    <td>Name of Substance</td>
                    <td>e.g. <span style="color: brown">Sulfachloropyridazine</span></td>
                </tr>
                <tr>
                    <th style="color: blue">cas_rn_dashboard</th>
                    <td>Chemical Abstracts Service Registry Number</td>
                    <td>e.g. <span style="color: brown">80-32-0</span></td>
                </tr>
                <tr>
                    <th style="color: blue">stdinchikey</th>
                    <td>The Standard International Chemical Identifier Key</td>
                    <td>e.g. <span style="color: brown">XOXHILFPRYWFOD-UHFFFAOYSA-N</span></td>
                </tr>
                <tr>
                    <th style="color: blue">dtxsid</th>
                    <td>Distributed Structure Searchable Toxicity Substance Identifiers</td>
                    <td>e.g. <span style="color: brown">DTXSID9045265</span></td>
                </tr>
            </tbody></table>
        </div>
    </div>
</div>

<div class="mx-3">Examples:</div>

<ul class="mx-3 cca-api-anchor">
    <li><a href="http://127.0.0.1:8000/api/susdat/id/4,5,6/JSON" target="_blank">http://127.0.0.1:8000/api/susdat/id/4,5,6/JSON</a></li>
    <li><a href="http://127.0.0.1:8000/api/susdat/name/Sulfachloropyridazine/XML" target="_blank">http://127.0.0.1:8000/api/susdat/name/Sulfachloropyridazine/XML</a></li>
    <li><a href="http://127.0.0.1:8000/api/susdat/cas_rn/80-32-0/JSON" target="_blank">http://127.0.0.1:8000/api/susdat/cas_rn/80-32-0/JSON</a></li>
    <li><a href="http://127.0.0.1:8000/api/susdat/stdinchikey/XOXHILFPRYWFOD-UHFFFAOYSA-N/JSON" target="_blank">http://127.0.0.1:8000/api/susdat/stdinchikey/XOXHILFPRYWFOD-UHFFFAOYSA-N/JSON</a></li>
    <li><a href="http://127.0.0.1:8000/api/susdat/dtxsid/DTXSID9045265/XML" target="_blank">http://127.0.0.1:8000/api/susdat/dtxsid/DTXSID9045265/XML</a></li>
    </ul>

<div class="mx-3 headline margin-top-20"><h3><b>SARS-CoV-2 Database</b> (module: <span style="color: red"><b>sars</b></span>)</h3></div>

<div class="mx-3 tag-box tag-box-v2" style="padding-top: 10px; padding-bottom: 10px"> 
    <div class="row cca-api-list">   
        <div class="col-md-12">
            <table class="table table-striped">
                <tbody><tr>
                    <th><b>parameter:</b></th>
                    <td></td>
                    <td><b>value:</b></td>
                </tr>    
                <tr>
                    <th style="color: blue">id</th>
                    <td>ID of SARS-CoV-2</td>
                    <td>e.g. <span style="color: brown">5 or 10</span></td>
                </tr>
                <tr>
                    <th style="color: blue">ct</th>
                    <td>Cycle threshold</td>
                    <td>e.g. <span style="color: brown">29.2</span></td>
                </tr>
                <tr>
                    <th style="color: blue">station_name</th>
                    <td>Station name</td>
                    <td>e.g. <span style="color: brown">Limassol</span></td>
                </tr>
                <tr>
                    <th style="color: blue">name_of_country</th>
                    <td>Name of country</td>
                    <td>e.g. <span style="color: brown">Greece</span></td>
                </tr>
            </tbody></table>
        </div>
    </div>
</div>

<div class="mx-3">Examples:</div>
<ul class="mx-3 cca-api-anchor">
    <li><a href="http://127.0.0.1:8000/api/sars/id/5,15,20/XML" target="_blank">http://127.0.0.1:8000/api/sars/id/5,15,20/XML</a></li>
    <li><a href="http://127.0.0.1:8000/api/sars/ct/29.2/JSON" target="_blank">http://127.0.0.1:8000/api/sars/ct/29.2/JSON</a></li>
    <li><a href="http://127.0.0.1:8000/api/sars/station_name/Limassol/JSON" target="_blank">http://127.0.0.1:8000/api/sars/station_name/Limassol/JSON</a></li>
    <li><a href="http://127.0.0.1:8000/api/sars/name_of_country/Greece/XML" target="_blank">http://127.0.0.1:8000/api/sars/name_of_country/Greece/XML</a></li>
    </ul>

@endsection