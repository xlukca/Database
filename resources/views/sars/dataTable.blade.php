

<br>
<br>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <h2>Sars Table Data</h2>    
</head>
   
    <br>
    <br>
<style>th, td, h2 {text-align: center;}</style>
        <style>
        .form-group {
            max-width: 1300px;
            margin: 0 auto;
        }
        </style>
        <body>
            <div class="form-group">
                <form action="{{route('table.data')}}" method="get">
                    <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>sars_id</th>
                                    <th>type_of_data</th>
                                    <th>data_provider</th>
                                    <th>contact_person</th>
                                    <th>address_of_contact</th>
                                    <th>email</th>
                                    <th>laboratory</th>
                                    <th>name_of_country</th>
                                    <th>name_of_city</th>
                                    <th>station_name</th>
                                    <th>national_code</th>
                                    <th>relevant_ec_code_wise</th>
                                    <th>relevant_ec_code_other</th>
                                    <th>other_code</th>
                                    <th>latitude</th>
                                    <th>latitude_d</th>
                                    <th>latitude_m</th>
                                    <th>latitude_s</th>
                                    <th>latitude_decimal</th>
                                    <th>longitude</th>
                                    <th>longitude_d</th>
                                    <th>longitude_m</th>
                                    <th>longitude_s</th>
                                    <th>longitude_decimal</th>
                                    <th>altitude</th>
                                    <th>design_capacity</th>
                                    <th>population_served</th>
                                    <th>catchment_size</th>
                                    <th>gdp</th>
                                    <th>people_positive</th>
                                    <th>people_recovered</th>
                                    <th>people_positive_past</th>
                                    <th>people_recovered_past</th>
                                    <th>sample_matrix</th>
                                    <th>sample_from_hour</th>
                                    <th>sample_from_day</th>
                                    <th>sample_from_month</th>
                                    <th>sample_from_year</th>
                                    <th>sample_to_hour</th>
                                    <th>sample_to_day</th>
                                    <th>sample_to_month</th>
                                    <th>sample_to_year</th>
                                    <th>type_of_sample</th>
                                    <th>type_of_composite_sample</th>
                                    <th>sample_interval</th>
                                    <th>flow_total</th>
                                    <th>flow_minimum</th>
                                    <th>flow_maximum</th>
                                    <th>temperature</th>
                                    <th>cod</th>
                                    <th>total_n_nh4_n</th>
                                    <th>tss</th>
                                    <th>dry_weather_conditions</th>
                                    <th>last_rain_event</th>
                                    <th>associated_phenotype</th>
                                    <th>genetic_marker</th>
                                    <th>date_of_sample_preparation</th>
                                    <th>storage_of_sample</th>
                                    <th>volume_of_sample</th>
                                    <th>internal_standard_used1</th>
                                    <th>method_used_for_sample_preparation</th>
                                    <th>date_of_rna_extraction</th>
                                    <th>method_used_for_rna_extraction</th>
                                    <th>internal_standard_used2</th>
                                    <th>rna1</th>
                                    <th>rna2</th>
                                    <th>replicates1</th>
                                    <th>analytical_method_type</th>
                                    <th>analytical_method_type_other</th>
                                    <th>date_of_analysis</th>
                                    <th>lod1</th>
                                    <th>lod2</th>
                                    <th>loq1</th>
                                    <th>loq2</th>
                                    <th>uncertainty_of_the_quantification</th>
                                    <th>efficiency</th>
                                    <th>rna3</th>
                                    <th>pos_control_used</th>
                                    <th>replicates2</th>
                                    <th>ct</th>
                                    <th>gene1</th>
                                    <th>gene2</th>
                                    <th>comment</th>
                                    <th>sars_save</th>
                                    <th>sars_source</th>
                                    <th>sars_source_dir</th>
                                    <th>longitude_decimal_show</th>
                                    <th>latitude_decimal_show</th>
                                    <th>noexport<th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @csrf
                                    @foreach ($sarsData as $s)
                                        <tr>
                                            <td>{{ $s->id }}</td>
                                            <td>{{ $s->type_of_data }}</td>
                                            <td>{{ $s->data_provider }}</td>
                                            <td>{{ $s->contact_person }}</td>
                                            <td>{{ $s->address_of_contact }}</td>
                                            <td>{{ $s->email }}</td>
                                            <td>{{ $s->laboratory }}</td>
                                            <td>{{ $s->name_of_country }}</td>
                                            <td>{{ $s->name_of_city }}</td>
                                            <td>{{ $s->station_name }}</td>
                                            <td>{{ $s->national_code }}</td>
                                            <td>{{ $s->relevant_ec_code_wise }}</td>
                                            <td>{{ $s->relevant_ec_code_other }}</td>
                                            <td>{{ $s->other_code }}</td>
                                            <td>{{ $s->latitude }}</td>
                                            <td>{{ $s->latitude_d }}</td>
                                            <td>{{ $s->latitude_m }}</td>
                                            <td>{{ $s->latitude_s }}</td>
                                            <td>{{ $s->latitude_decimal }}</td>
                                            <td>{{ $s->longitude }}</td>
                                            <td>{{ $s->longitude_d }}</td>
                                            <td>{{ $s->longitude_m }}</td>
                                            <td>{{ $s->longitude_s }}</td>
                                            <td>{{ $s->longitude_decimal }}</td>
                                            <td>{{ $s->altitude }}</td>
                                            <td>{{ $s->design_capacity }}</td>
                                            <td>{{ $s->population_served }}</td>
                                            <td>{{ $s->catchment_size }}</td>
                                            <td>{{ $s->gdp }}</td>
                                            <td>{{ $s->people_positive }}</td>
                                            <td>{{ $s->people_recovered }}</td>
                                            <td>{{ $s->people_positive_past }}</td>
                                            <td>{{ $s->people_recovered_past }}</td>
                                            <td>{{ $s->sample_matrix }}</td>
                                            <td>{{ $s->sample_from_hour }}</td>
                                            <td>{{ $s->sample_from_day }}</td>
                                            <td>{{ $s->sample_from_month }}</td>
                                            <td>{{ $s->sample_from_year }}</td>
                                            <td>{{ $s->sample_to_hour }}</td>
                                            <td>{{ $s->sample_to_day }}</td>
                                            <td>{{ $s->sample_to_month }}</td>
                                            <td>{{ $s->sample_to_year }}</td>
                                            <td>{{ $s->type_of_sample }}</td>
                                            <td>{{ $s->type_of_composite_sample }}</td>
                                            <td>{{ $s->sample_interval }}</td>
                                            <td>{{ $s->flow_total }}</td>
                                            <td>{{ $s->flow_minimum }}</td>
                                            <td>{{ $s->flow_maximum }}</td>
                                            <td>{{ $s->temperature }}</td>
                                            <td>{{ $s->cod }}</td>
                                            <td>{{ $s->total_n_nh4_n }}</td>
                                            <td>{{ $s->tss }}</td>
                                            <td>{{ $s->dry_weather_conditions }}</td>
                                            <td>{{ $s->last_rain_event }}</td>
                                            <td>{{ $s->associated_phenotype }}</td>
                                            <td>{{ $s->genetic_marker }}</td>
                                            <td>{{ $s->date_of_sample_preparation }}</td>
                                            <td>{{ $s->storage_of_sample }}</td>
                                            <td>{{ $s->volume_of_sample }}</td>
                                            <td>{{ $s->internal_standard_used1 }}</td>
                                            <td>{{ $s->method_used_for_sample_preparation }}</td>
                                            <td>{{ $s->date_of_rna_extraction }}</td>
                                            <td>{{ $s->method_used_for_rna_extraction }}</td>
                                            <td>{{ $s->internal_standard_used2 }}</td>
                                            <td>{{ $s->rna1 }}</td>
                                            <td>{{ $s->rna2 }}</td>
                                            <td>{{ $s->replicates1 }}</td>
                                            <td>{{ $s->analytical_method_type }}</td>
                                            <td>{{ $s->analytical_method_type_other }}</td>
                                            <td>{{ $s->date_of_analysis }}</td>
                                            <td>{{ $s->lod1 }}</td>
                                            <td>{{ $s->lod2 }}</td>
                                            <td>{{ $s->loq1 }}</td>
                                            <td>{{ $s->loq2 }}</td>
                                            <td>{{ $s->uncertainty_of_the_quantification }}</td>
                                            <td>{{ $s->efficiency }}</td>
                                            <td>{{ $s->rna3 }}</td>
                                            <td>{{ $s->pos_control_used }}</td>
                                            <td>{{ $s->replicates2 }}</td>
                                            <td>{{ $s->ct }}</td>
                                            <td>{{ $s->gene1 }}</td>
                                            <td>{{ $s->gene2 }}</td>
                                            <td>{{ $s->comment }}</td>
                                            <td>{{ $s->sars_save }}</td>
                                            <td>{{ $s->sars_source }}</td>
                                            <td>{{ $s->sars_source_dir }}</td>
                                            <td>{{ $s->longitude_decimal_show }}</td>
                                            <td>{{ $s->latitude_decimal_show }}</td>
                                            <td>{{ $s->noexport }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </form>
            </div> 
    </body>



