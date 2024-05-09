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
        Schema::create('susdats', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name')->nullable();
            $table->mediumText('name_dashboard')->nullable();
            $table->mediumText('name_chemspider')->nullable();
            $table->mediumText('name_iupac')->nullable();
            $table->mediumText('synonyms_chemspider')->nullable();
            $table->mediumText('reliability_synonyms_chemspider')->nullable();
            $table->string('cas_rn', 40)->nullable()->index();
            $table->string('cas_rn_dashboard', 80)->nullable();
            $table->mediumText('cas_rn_pubchem')->nullable();
            $table->mediumText('cas_rn_cactus')->nullable();
            $table->mediumText('cas_rn_chemspider')->nullable();
            $table->mediumText('reliability_cas_rn_chemspider')->nullable();
            $table->string('validation_level', 20)->nullable();
            $table->mediumText('smiles')->nullable();
            $table->mediumText('smiles_dashboard')->nullable();
            $table->mediumText('stdinchi')->nullable();
            $table->string('stdinchikey', 60)->nullable()->index();
            $table->mediumText('ms_ready_smiles')->nullable();
            $table->mediumText('ms_ready_stdinchi')->nullable();
            $table->string('ms_ready_stdinchikey', 50)->nullable();
            $table->mediumText('source')->nullable();
            $table->string('pubchem_cid', 40)->nullable();
            $table->string('chemspider_id', 30)->nullable();
            $table->string('dtxsid', 20)->nullable()->index(); // cudzí kluc má byť pri tejto premennej
            $table->string('molecular_formula', 100)->nullable();
            $table->string('monoiso_mass', 40)->nullable();
            $table->string('mhplus', 30)->nullable();
            $table->string('mhminus', 30)->nullable();
            $table->string('pred_rti_positive_esi', 40)->nullable();
            $table->string('uncertainty_rti_pos', 80)->nullable();
            $table->string('pred_rti_negative_esi', 40)->nullable();
            $table->string('uncertainty_rti_neg', 80)->nullable();
            $table->string('tetrahymena_pyriformis_toxicity', 40)->nullable();
            $table->string('igc50_48_hr', 40)->nullable();
            $table->string('uncertainty_tetrahymena_pyriformis_toxicity', 60)->nullable();
            $table->string('daphnia_toxicity', 40)->nullable();
            $table->string('lc50_48_hr', 40)->nullable();
            $table->string('uncertainty_daphnia_toxicity', 80)->nullable();
            $table->string('algae_toxicity', 30)->nullable();
            $table->string('ec50_72_hr', 40)->nullable();
            $table->string('uncertainty_algae_toxicity', 80)->nullable();
            $table->string('pimephales_promelas_toxicity', 40)->nullable();
            $table->string('lc50_96_hr', 40)->nullable();
            $table->string('uncertainty_pimephales_promelas_toxicity', 80)->nullable();
            $table->string('logkow_episuite', 20)->nullable();
            $table->string('exp_logkow_episuite', 20)->nullable();
            $table->string('chemspider_id_based_on_inchikey_19032018', 30)->nullable();
            $table->string('alogp_chemspider', 30)->nullable();
            $table->string('xlogp_chemspider', 40)->nullable();
            $table->string('lowest_p_pnec_qsar', 40)->nullable();
            $table->string('species', 80)->nullable();
            $table->string('uncertainty', 60)->nullable();
            $table->string('exposurescore_water_kemi', 10)->nullable()->default(NULL); 
            $table->string('hazscore_ecochronic_kemi', 10)->nullable()->default(NULL);
            $table->string('validationlevel_kemi', 5)->nullable()->default(NULL); // tinyInteger
            $table->string('prob_of_gc', 10)->nullable();
            $table->string('prob_rplc', 10)->nullable();
            $table->string('pred_chromatography', 10)->nullable();
            $table->string('prob_of_both_ionization_source', 10)->nullable();
            $table->string('prob_ei', 10)->nullable();
            $table->string('prob_esi', 10)->nullable();
            $table->string('pred_ionization_source', 40)->nullable();
            $table->string('prob_both_esi_mode', 10)->nullable();
            $table->string('prob_plus_esi', 10)->nullable();
            $table->string('prob_minus_esi', 10)->nullable();
            $table->string('pred_esi_mode', 30)->nullable();
            $table->string('preferable_platform_by_decision_tree', 20)->nullable();
            $table->mediumText('synonyms')->nullable();
            $table->mediumText('remark')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('susdats');
    }
};
