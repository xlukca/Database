<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use MongoDB\Laravel\Eloquent\Model;

class Susdata extends Model
{
    use HasFactory;
    use SoftDeletes;
    
  
    protected $fillable = [
        'id', 
        'name', 
        'name_dashboard',
        'name_chemspider',
        'name_iupac',
        'synonyms_chemspider',
        'reliability_synonyms_chemspider',
        'cas_rn', 
        'cas_rn_dashboard',
        'cas_rn_pubchem',
        'cas_rn_cactus',
        'cas_rn_chemspider',
        'reliability_cas_rn_chemspider',
        'validation_level',
        'smiles', 
        'smiles_dashboard',
        'stdinchi', 
        'stdinchikey', 
        'ms_ready_smiles', 
        'ms_ready_stdinchi', 
        'ms_ready_stdinchikey', 
        'source', 
        'pubchem_cid', 
        'chemspider_id', 
        'dtxsid', 
        'molecular_formula', 
        'monoiso_mass', 
        'mhplus',
        'mhminus',
        'pred_rti_positive_esi', 
        'uncertainty_rti_pos', 
        'pred_rti_negative_esi', 
        'uncertainty_rti_neg', 
        'tetrahymena_pyriformis_toxicity', 
        'igc50_48_hr',
        'uncertainty_tetrahymena_pyriformis_toxicity', 
        'daphnia_toxicity', 
        'lc50_48_hr',
        'uncertainty_daphnia_toxicity', 
        'algae_toxicity', 
        'ec50_72_hr',
        'uncertainty_algae_toxicity', 
        'pimephales_promelas_toxicity', 
        'lc50_96_hr',
        'uncertainty_pimephales_promelas_toxicity', 
        'logkow_episuite', 
        'exp_logkow_episuite', 
        'chemspider_id_based_on_inchikey_19032018',
        'alogp_chemspider', 
        'xlogp_chemspider', 
        'lowest_p_pnec_qsar',
        'species', 
        'uncertainty', 
        'exposurescore_water_kemi', 
        'hazscore_ecochronic_kemi', 
        'validationlevel_kemi', 
        'prob_of_gc', 
        'prob_rplc', 
        'pred_chromatography', 
        'prob_of_both_ionization_source', 
        'prob_ei', 
        'prob_esi', 
        'pred_ionization_source', 
        'prob_both_esi_mode', 
        'prob_plus_esi', 
        'prob_minus_esi', 
        'pred_esi_mode', 
        'preferable_platform_by_decision_tree', 
        'synonyms', 
        'remark' 
    ];
}
