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
            $table->mediumText('cas_rn')->nullable();
            $table->mediumText('cas_rn_dashboard')->nullable();
            $table->mediumText('cas_rn_pubchem')->nullable();
            $table->mediumText('cas_rn_cactus')->nullable();
            $table->mediumText('cas_rn_chemspider')->nullable();
            $table->mediumText('reliability_cas_rn_chemspider')->nullable();
            $table->mediumText('validation_level')->nullable();
            $table->mediumText('smiles')->nullable();
            $table->mediumText('smiles_dashboard')->nullable();
            $table->mediumText('stdinchi')->nullable();
            $table->mediumText('stdinchikey')->nullable();
            $table->mediumText('ms_ready_smiles')->nullable();
            $table->mediumText('ms_ready_stdinchi')->nullable();
            $table->mediumText('ms_ready_stdinchikey')->nullable();
            $table->mediumText('source')->nullable();
            $table->mediumText('pubchem_cid')->nullable();
            $table->mediumText('chemspider_id')->nullable();
            $table->string('dtxsid', 20)->nullable(); // cudzí kluc má byť pri tejto premennej
            $table->mediumText('molecular_formula')->nullable();
            $table->mediumText('monoiso_mass')->nullable();
            $table->mediumText('mhplus')->nullable();
            $table->mediumText('mhminus')->nullable();
            $table->mediumText('pred_rti_positive_esi')->nullable();
            $table->mediumText('uncertainty_rti_pos')->nullable();
            $table->mediumText('pred_rti_negative_esi')->nullable();
            $table->mediumText('uncertainty_rti_neg')->nullable();
            $table->mediumText('tetrahymena_pyriformis_toxicity')->nullable();
            $table->mediumText('igc50_48_hr')->nullable();
            $table->mediumText('uncertainty_tetrahymena_pyriformis_toxicity')->nullable();
            $table->mediumText('daphnia_toxicity')->nullable();
            $table->mediumText('lc50_48_hr')->nullable();
            $table->mediumText('uncertainty_daphnia_toxicity')->nullable();
            $table->mediumText('algae_toxicity')->nullable();
            $table->mediumText('ec50_72_hr')->nullable();
            $table->mediumText('uncertainty_algae_toxicity')->nullable();
            $table->mediumText('pimephales_promelas_toxicity')->nullable();
            $table->mediumText('lc50_96_hr')->nullable();
            $table->mediumText('uncertainty_pimephales_promelas_toxicity')->nullable();
            $table->mediumText('logkow_episuite')->nullable();
            $table->mediumText('exp_logkow_episuite')->nullable();
            $table->mediumText('chemspider_id_based_on_inchikey_19032018')->nullable();
            $table->mediumText('alogp_chemspider')->nullable();
            $table->mediumText('xlogp_chemspider')->nullable();
            $table->mediumText('lowest_p_pnec_qsar')->nullable();
            $table->mediumText('species')->nullable();
            $table->mediumText('uncertainty')->nullable();
            $table->mediumText('exposurescore_water_kemi', $precision = 10, $scale = 2)->nullable()->default(NULL); // decimal
            $table->mediumText('hazscore_ecochronic_kemi', $precision = 10, $scale = 2)->nullable()->default(NULL); // decimal
            $table->mediumText('validationlevel_kemi')->nullable()->default(NULL); // tinyInteger
            $table->mediumText('prob_of_gc')->nullable();
            $table->mediumText('prob_rplc')->nullable();
            $table->mediumText('pred_chromatography')->nullable();
            $table->mediumText('prob_of_both_ionization_source')->nullable();
            $table->mediumText('prob_ei')->nullable();
            $table->mediumText('prob_esi')->nullable();
            $table->mediumText('pred_ionization_source')->nullable();
            $table->mediumText('prob_both_esi_mode')->nullable();
            $table->mediumText('prob_plus_esi')->nullable();
            $table->mediumText('prob_minus_esi')->nullable();
            $table->mediumText('pred_esi_mode')->nullable();
            $table->mediumText('preferable_platform_by_decision_tree')->nullable();
            $table->text('synonyms')->nullable();
            $table->text('remark')->nullable();            
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
