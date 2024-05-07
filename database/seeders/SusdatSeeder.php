<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\SimpleExcel\SimpleExcelReader;
use App\Models\Susdat;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\LazyCollection;

class SusdatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = base_path() . '/database/seeders/seeds/susdat.csv';
        LazyCollection::make(function () use ($path) {
            yield from SimpleExcelReader::create($path)->getRows();
        })->chunk(50)->each(function ($chunk) {
            $data = [];
        
            foreach ($chunk as $row) {
                $data[] = [
                'id' => $row['sus_id'],
                'name' => $row['sus_name'],
                'name_dashboard' => $row['Name Dashboard'],
                'name_chemspider' => $row['Name ChemSpider'],
                'name_iupac' => $row['Name IUPAC'],
                'synonyms_chemspider' => $row['Synonyms ChemSpider'],
                'reliability_synonyms_chemspider' => $row['Reliability of Synonyms ChemSpider'],
                'cas_rn' => $row['sus_cas'],
                'cas_rn_dashboard' => $row['CAS_RN Dashboard'],
                'cas_rn_pubchem' => $row['CAS_RN PubChem'],
                'cas_rn_cactus' => $row['CAS_RN Cactus'],
                'cas_rn_chemspider' => $row['CAS_RN ChemSpider'],
                'reliability_cas_rn_chemspider' => $row['Reliability of CAS_ChemSpider'],
                'validation_level' => $row['Validation Level'],
                'smiles' => $row['SMILES'],
                'smiles_dashboard' => $row['SMILES Dashboard'],
                'stdinchi' => $row['StdInChI'],
                'stdinchikey' => $row['StdInChIKey'],
                'ms_ready_smiles' => $row['MS_Ready_SMILES'],
                'ms_ready_stdinchi' => $row['MS_Ready_StdInChI'],
                'ms_ready_stdinchikey' => $row['MS_Ready_StdInChIKey'],
                'source' => $row['Source'],
                'pubchem_cid' => $row['PubChem_CID'],
                'chemspider_id' => $row['ChemSpiderID'],
                'dtxsid' => $row['DTXSID'],
                'molecular_formula' => $row['Molecular_Formula'],
                'monoiso_mass' => $row['Monoiso_Mass'],
                'mhplus' => $row['[M+H]+'],
                'mhminus' => $row['[M-H]-'],
                'pred_rti_positive_esi' => $row['Pred_RTI_Positive_ESI'],
                'uncertainty_rti_pos' => $row['Uncertainty_RTI_pos'],
                'pred_rti_negative_esi' => $row['Pred_RTI_Negative_ESI'],
                'uncertainty_rti_neg' => $row['Uncertainty_RTI_neg'],
                'tetrahymena_pyriformis_toxicity' => $row['Tetrahymena_pyriformis_toxicity'],
                'igc50_48_hr' => $row['IGC50_48_hr_ug/L'],
                'uncertainty_tetrahymena_pyriformis_toxicity' => $row['Uncertainty_Tetrahymena_pyriformis_toxicity'],
                'daphnia_toxicity' => $row['Daphnia_toxicity'],
                'lc50_48_hr' => $row['LC50_48_hr_ug/L'],
                'uncertainty_daphnia_toxicity' => $row['Uncertainty_Daphnia_toxicity'],
                'algae_toxicity' => $row['Algae_toxicity'],
                'ec50_72_hr' => $row['EC50_72_hr_ug/L'],
                'uncertainty_algae_toxicity' => $row['Uncertainty_Algae_toxicity'],
                'pimephales_promelas_toxicity' => $row['Pimephales_promelas_toxicity'],
                'lc50_96_hr' => $row['LC50_96_hr_ug/L'],
                'uncertainty_pimephales_promelas_toxicity' => $row['Uncertainty_Pimephales_promelas_toxicity'],
                'logkow_episuite' => $row['logKow_EPISuite'],
                'exp_logkow_episuite' => $row['Exp_logKow_EPISuite'],
                'chemspider_id_based_on_inchikey_19032018' => $row['ChemSpider ID based on InChIKey_19032018'],
                'alogp_chemspider' => $row['alogp_ChemSpider'],
                'xlogp_chemspider' => $row['xlogp_ChemSpider'],
                'lowest_p_pnec_qsar' => $row['Lowest P-PNEC (QSAR) [ug/L]'],
                'species' => $row['Species'],
                'uncertainty' => $row['Uncertainty'],
                'exposurescore_water_kemi' => $row['ExposureScore_Water_KEMI'],
                'hazscore_ecochronic_kemi' => $row['HazScore_EcoChronic_KEMI'],
                'validationlevel_kemi' => $row['ValidationLevel_KEMI'],
                'prob_of_gc' => $row['Prob_of_GC'],
                'prob_rplc' => $row['Prob_RPLC'],
                'pred_chromatography' => $row['Pred_Chromatography'],
                'prob_of_both_ionization_source' => $row['Prob_of_both_Ionization_Source'],
                'prob_ei' => $row['Prob_EI'],
                'prob_esi' => $row['Prob_ESI'],
                'pred_ionization_source' => $row['Pred_Ionization_source'],
                'prob_both_esi_mode' => $row['Prob_both_ESI_mode'],
                'prob_plus_esi' => $row['Prob_plusESI'],
                'prob_minus_esi' => $row['Prob_minusESI'],
                'pred_esi_mode' => $row['Pred_ESI_mode'],
                'preferable_platform_by_decision_tree' => $row['Preferable_Platform_by_decision_Tree'],
                'synonyms' => $row['sus_synonyms'],
                'remark' => $row['sus_remark'],
            ];
         }
        //     Susdat::insert($data);
           DB::beginTransaction();   //  SQL databases

            try {
                Susdat::insert($data);
                DB::commit();
            } catch (\Exception $e) {
                // V prípade chyby rollback
                DB::rollback();
                // Ďalšie spracovanie chyby alebo logovanie
            }
        });
    }
}

