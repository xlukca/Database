<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sars', function (Blueprint $table) {
            $table->id();
            $table->text('type_of_data');
            $table->text('data_provider');
            $table->text('contact_person');
            $table->text('address_of_contact');
            $table->text('email');
            $table->text('laboratory');
            $table->text('name_of_country',100);
            $table->text('name_of_city');
            $table->text('station_name');
            $table->text('national_code');
            $table->text('relevant_ec_code_wise');
            $table->text('relevant_ec_code_other');
            $table->text('other_code');
            $table->text('latitude');
            $table->text('latitude_d');
            $table->text('latitude_m');
            $table->text('latitude_s');
            $table->text('latitude_decimal');
            $table->text('longitude');
            $table->text('longitude_d');
            $table->text('longitude_m');
            $table->text('longitude_s');
            $table->text('longitude_decimal');
            $table->text('altitude');
            $table->text('design_capacity');
            $table->text('population_served');
            $table->text('catchment_size');
            $table->text('gdp');
            $table->text('people_positive');
            $table->text('people_recovered');
            $table->text('people_positive_past');
            $table->text('people_recovered_past');
            $table->text('sample_matrix');
            $table->text('sample_from_hour');
            $table->text('sample_from_day');
            $table->text('sample_from_month');
            $table->text('sample_from_year');
            $table->text('sample_to_hour');
            $table->text('sample_to_day');
            $table->text('sample_to_month');
            $table->text('sample_to_year');
            $table->text('type_of_sample');
            $table->text('type_of_composite_sample');
            $table->text('sample_interval');
            $table->text('flow_total');
            $table->text('flow_minimum');
            $table->text('flow_maximum');
            $table->text('temperature');
            $table->text('cod');
            $table->text('total_n_nh4_n');
            $table->text('tss');
            $table->text('dry_weather_conditions');
            $table->text('last_rain_event');
            $table->text('associated_phenotype');
            $table->text('genetic_marker');
            $table->text('date_of_sample_preparation');
            $table->text('storage_of_sample');
            $table->text('volume_of_sample');
            $table->text('internal_standard_used1');
            $table->text('method_used_for_sample_preparation');
            $table->text('date_of_rna_extraction');
            $table->text('method_used_for_rna_extraction');
            $table->text('internal_standard_used2');
            $table->text('rna1');
            $table->text('rna2');
            $table->text('replicates1');
            $table->text('analytical_method_type');
            $table->text('analytical_method_type_other');
            $table->text('date_of_analysis');
            $table->text('lod1');
            $table->text('lod2');
            $table->text('loq1');
            $table->text('loq2');
            $table->text('uncertainty_of_the_quantification');
            $table->text('efficiency');
            $table->text('rna3');
            $table->text('pos_control_used');
            $table->text('replicates2');
            $table->text('ct')->nullable();
            $table->text('gene1')->nullable();
            $table->text('gene2')->nullable();
            $table->text('comment');
            $table->text('sars_save');
            $table->foreignid('file_id')->references('id')->on('files');
            $table->text('sars_source_dir');
            $table->text('longitude_decimal_show');
            $table->text('latitude_decimal_show');
            $table->text('noexport');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sars');
    }
};
