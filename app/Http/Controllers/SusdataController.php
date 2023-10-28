<?php

namespace App\Http\Controllers;

use App\Models\Susdata;
use Illuminate\Http\Request;

class SusdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $susdata = Susdata::paginate(10);
        // $susdata = Susdata::paginate(93973);
        // $susdata->setConnection('mysql_second');
        return view('admin.susdata.susdataTable')->with('susdata', $susdata);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Susdata $susdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $sus_id->setConnection('mysql_second');
        return view('admin.susdata.editSusdata')->with('susdata', Susdata::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $sus_id->setConnection('mysql_second');
        $rules = [
            'name'                                          => 'nullable|string',
            'name_dashboard'                                => 'nullable|mediumText',
            'name_chemspider'                               => 'nullable|mediumText',
            'name_iupac'                                    => 'nullable|mediumText',
            'synonyms_chemspider'                           => 'nullable|mediumText',
            'reliability_synonyms_chemspider'               => 'nullable|mediumText',
            'cas_rn'                                        => 'nullable|mediumText',
            'cas_rn_dashboard'                              => 'nullable|mediumText',
            'cas_rn_pubchem'                                => 'nullable|mediumText',
            'cas_rn_cactus'                                 => 'nullable|mediumText',
            'cas_rn_chemspider'                             => 'nullable|mediumText',
            'reliability_cas_rn_chemspider'                 => 'nullable|mediumText',
            'validation_level'                              => 'nullable|mediumText',
            'smiles'                                        => 'nullable|mediumText',
            'smiles_dashboard'                              => 'nullable|mediumText',
            'stdinchi'                                      => 'nullable|mediumText',
            'stdinchikey'                                   => 'nullable|mediumText',
            'ms_ready_smiles'                               => 'nullable|mediumText',
            'ms_ready_stdinchi'                             => 'nullable|mediumText',
            'ms_ready_stdinchikey'                          => 'nullable|mediumText',
            'source'                                        => 'nullable|mediumText',
            'pubchem_cid'                                   => 'nullable|mediumText',
            'chemspider_id'                                 => 'nullable|mediumText',
            'dtxsid'                                        => 'nullable|string',
            'molecular_formula'                             => 'nullable|mediumText',
            'monoiso_mass'                                  => 'nullable|mediumText',
            'mhplus'                                        => 'nullable|mediumText',
            'mhminus'                                       => 'nullable|mediumText',
            'pred_rti_positive_esi'                         => 'nullable|mediumText',
            'uncertainty_rti_pos'                           => 'nullable|mediumText',
            'pred_rti_negative_esi'                         => 'nullable|mediumText',
            'uncertainty_rti_neg'                           => 'nullable|mediumText',
            'tetrahymena_pyriformis_toxicity'               => 'nullable|mediumText',
            'igc50_48_hr'                                   => 'nullable|mediumText',
            'uncertainty_tetrahymena_pyriformis_toxicity'   => 'nullable|mediumText',
            'daphnia_toxicity'                              => 'nullable|mediumText',
            'lc50_48_hr'                                    => 'nullable|mediumText',
            'uncertainty_daphnia_toxicity'                  => 'nullable|mediumText',
            'algae_toxicity'                                => 'nullable|mediumText',
            'ec50_72_hr'                                    => 'nullable|mediumText',
            'uncertainty_algae_toxicity'                    => 'nullable|mediumText',
            'pimephales_promelas_toxicity'                  => 'nullable|mediumText',
            'lc50_96_hr'                                    => 'nullable|mediumText',
            'uncertainty_pimephales_promelas_toxicity'      => 'nullable|mediumText',
            'logkow_episuite'                               => 'nullable|mediumText',
            'exp_logkow_episuite'                           => 'nullable|mediumText',
            'chemspider_id_based_on_inchikey_19032018'      => 'nullable|mediumText',
            'alogp_chemspider'                              => 'nullable|mediumText',
            'xlogp_chemspider'                              => 'nullable|mediumText',
            'lowest_p_pnec_qsar'                            => 'nullable|mediumText',
            'species'                                       => 'nullable|mediumText',
            'uncertainty'                                   => 'nullable|mediumText',
            'exposurescore_water_kemi'                      => 'nullable|mediumText',
            'hazscore_ecochronic_kemi'                      => 'nullable|mediumText',
            'validationlevel_kemi'                          => 'nullable|mediumText',
            'prob_of_gc'                                    => 'nullable|mediumText',
            'prob_rplc'                                     => 'nullable|mediumText',
            'pred_chromatography'                           => 'nullable|mediumText',
            'prob_of_both_ionization_source'                => 'nullable|mediumText',
            'prob_ei'                                       => 'nullable|mediumText',
            'prob_esi'                                      => 'nullable|mediumText',
            'pred_ionization_source'                        => 'nullable|mediumText',
            'prob_both_esi_mode'                            => 'nullable|mediumText',
            'prob_plus_esi'                                 => 'nullable|mediumText',
            'prob_minus_esi'                                => 'nullable|mediumText',
            'pred_esi_mode'                                 => 'nullable|mediumText',
            'preferable_platform_by_decision_tree'          => 'nullable|mediumText',
            'synonyms'                                      => 'nullable|text',
            'remark'                                        => 'nullable|text',
        ];
      
       // dd($request);
        $validated = $request->validate($rules);
        
        $d = Susdata::find($id);
       // $sus_id->setConnection('mysql_second');
        $d->name                                                = $request->name;
        $d->name_dashboard                                      = $request->name_dashboard;
        $d->name_chemspider                                     = $request->name_chemspider;
        $d->name_iupac                                          = $request->name_iupac;
        $d->synonyms_chemspider                                 = $request->synonyms_chemspider;
        $d->reliability_synonyms_chemspider                     = $request->reliability_synonyms_chemspider;
        $d->cas_rn                                              = $request->cas_rn;
        $d->cas_rn_dashboard                                    = $request->cas_rn_dashboard;
        $d->cas_rn_pubchem                                      = $request->cas_rn_pubchem;
        $d->cas_rn_cactus                                       = $request->cas_rn_cactus;
        $d->cas_rn_chemspider                                   = $request->cas_rn_chemspider;
        $d->reliability_cas_rn_chemspider                       = $request->reliability_cas_rn_chemspider;
        $d->validation_level                                    = $request->validation_level;
        $d->smiles                                              = $request->smiles;
        $d->smiles_dashboard                                    = $request->smiles_dashboard;
        $d->stdinchi                                            = $request->stdinchi;
        $d->stdinchikey                                         = $request->stdinchikey;
        $d->ms_ready_smiles                                     = $request->ms_ready_smiles;
        $d->ms_ready_stdinchi                                   = $request->ms_ready_stdinchi;
        $d->ms_ready_stdinchikey                                = $request->ms_ready_stdinchikey;
        $d->source                                              = $request->source;
        $d->pubchem_cid                                         = $request->pubchem_cid;
        $d->chemspider_id                                       = $request->chemspider_id;
        $d->dtxsid                                              = $request->dtxsid;
        $d->molecular_formula                                   = $request->molecular_formula;
        $d->monoiso_mass                                        = $request->monoiso_mass;
        $d->mhplus                                              = $request->mhplus;
        $d->mhminus                                             = $request->mhminus;
        $d->pred_rti_positive_esi                               = $request->pred_rti_positive_esi;
        $d->uncertainty_rti_pos                                 = $request->uncertainty_rti_pos;
        $d->pred_rti_negative_esi                               = $request->pred_rti_negative_esi;
        $d->pred_rti_negative_esi                               = $request->pred_rti_negative_esi;
        $d->tetrahymena_pyriformis_toxicity                     = $request->tetrahymena_pyriformis_toxicity;
        $d->igc50_48_hr                                         = $request->igc50_48_hr;
        $d->uncertainty_tetrahymena_pyriformis_toxicity         = $request->uncertainty_tetrahymena_pyriformis_toxicity;
        $d->daphnia_toxicity                                    = $request->daphnia_toxicity;
        $d->lc50_48_hr                                          = $request->lc50_48_hr;
        $d->uncertainty_daphnia_toxicity                        = $request->uncertainty_daphnia_toxicity;
        $d->algae_toxicity                                      = $request->algae_toxicity;
        $d->ec50_72_hr                                          = $request->ec50_72_hr;
        $d->uncertainty_algae_toxicity                          = $request->uncertainty_algae_toxicity;
        $d->pimephales_promelas_toxicity                        = $request->pimephales_promelas_toxicity;
        $d->lc50_96_hr                                          = $request->lc50_96_hr;
        $d->uncertainty_pimephales_promelas_toxicity            = $request->uncertainty_pimephales_promelas_toxicity;
        $d->logkow_episuite                                     = $request->logkow_episuite;
        $d->exp_logkow_episuite                                 = $request->exp_logkow_episuite;
        $d->chemspider_id_based_on_inchikey_19032018            = $request->chemspider_id_based_on_inchikey_19032018;
        $d->alogp_chemspider                                    = $request->alogp_chemspider;
        $d->xlogp_chemspider                                    = $request->xlogp_chemspider; 
        $d->lowest_p_pnec_qsar                                  = $request->lowest_p_pnec_qsar;
        $d->species                                             = $request->species; 
        $d->uncertainty                                         = $request->uncertainty; 
        $d->exposurescore_water_kemi                            = $request->exposurescore_water_kemi; 
        $d->hazscore_ecochronic_kemi                            = $request->hazscore_ecochronic_kemi; 
        $d->validationlevel_kemi                                = $request->validationlevel_kemi; 
        $d->prob_of_gc                                          = $request->prob_of_gc; 
        $d->prob_rplc                                           = $request->prob_rplc; 
        $d->pred_chromatography                                 = $request->pred_chromatography; 
        $d->prob_of_both_ionization_source                      = $request->prob_of_both_ionization_source; 
        $d->prob_ei                                             = $request->prob_ei; 
        $d->prob_esi                                            = $request->prob_esi; 
        $d->pred_ionization_source                              = $request->pred_ionization_source; 
        $d->prob_both_esi_mode                                  = $request->prob_both_esi_mode; 
        $d->prob_plus_esi                                       = $request->prob_plus_esi; 
        $d->prob_minus_esi                                      = $request->prob_minus_esi; 
        $d->pred_esi_mode                                       = $request->pred_esi_mode; 
        $d->preferable_platform_by_decision_tree                = $request->preferable_platform_by_decision_tree; 
        $d->synonyms                                            = $request->synonyms; 
        $d->remark                                              = $request->remark; 
        $d->save();

        return redirect()->route('admin.susdataTable.index')->with('success', 'The record was succesfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Susdata::find($id)->delete();
       // $sus_id->setConnection('mysql_second');
        return redirect()->route('admin.susdataTable.index')->with('success', 'The record was deleted.');
    }
}
