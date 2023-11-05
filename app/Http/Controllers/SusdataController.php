<?php

namespace App\Http\Controllers;

use App\Models\Susdata;
use Illuminate\Http\Request;
use Exception;

class SusdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $susdata = Susdata::withTrashed()->paginate(10);
        // $susdata = Susdata::paginate(93973);
        // $susdata->setConnection('mysql_second');
        return view('admin.susdata.index')->with('susdata', $susdata);
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
            'name_dashboard'                                => 'nullable|string',
            'name_chemspider'                               => 'nullable|string',
            'name_iupac'                                    => 'nullable|string',
            'synonyms_chemspider'                           => 'nullable|string',
            'reliability_synonyms_chemspider'               => 'nullable|string',
            'cas_rn'                                        => 'nullable|string',
            'cas_rn_dashboard'                              => 'nullable|string',
            'cas_rn_pubchem'                                => 'nullable|string',
            'cas_rn_cactus'                                 => 'nullable|string',
            'cas_rn_chemspider'                             => 'nullable|string',
            'reliability_cas_rn_chemspider'                 => 'nullable|string',
            'validation_level'                              => 'nullable|string',
            'smiles'                                        => 'nullable|string',
            'smiles_dashboard'                              => 'nullable|string',
            'stdinchi'                                      => 'nullable|string',
            'stdinchikey'                                   => 'nullable|string',
            'ms_ready_smiles'                               => 'nullable|string',
            'ms_ready_stdinchi'                             => 'nullable|string',
            'ms_ready_stdinchikey'                          => 'nullable|string',
            'source'                                        => 'nullable|string',
            'pubchem_cid'                                   => 'nullable|string',
            'chemspider_id'                                 => 'nullable|string',
            'dtxsid'                                        => 'nullable|string',
            'molecular_formula'                             => 'nullable|string',
            'monoiso_mass'                                  => 'nullable|string',
            'mhplus'                                        => 'nullable|string',
            'mhminus'                                       => 'nullable|string',
            'pred_rti_positive_esi'                         => 'nullable|string',
            'uncertainty_rti_pos'                           => 'nullable|string',
            'pred_rti_negative_esi'                         => 'nullable|string',
            'uncertainty_rti_neg'                           => 'nullable|string',
            'tetrahymena_pyriformis_toxicity'               => 'nullable|string',
            'igc50_48_hr'                                   => 'nullable|string',
            'uncertainty_tetrahymena_pyriformis_toxicity'   => 'nullable|string',
            'daphnia_toxicity'                              => 'nullable|string',
            'lc50_48_hr'                                    => 'nullable|string',
            'uncertainty_daphnia_toxicity'                  => 'nullable|string',
            'algae_toxicity'                                => 'nullable|string',
            'ec50_72_hr'                                    => 'nullable|string',
            'uncertainty_algae_toxicity'                    => 'nullable|string',
            'pimephales_promelas_toxicity'                  => 'nullable|string',
            'lc50_96_hr'                                    => 'nullable|string',
            'uncertainty_pimephales_promelas_toxicity'      => 'nullable|string',
            'logkow_episuite'                               => 'nullable|string',
            'exp_logkow_episuite'                           => 'nullable|string',
            'chemspider_id_based_on_inchikey_19032018'      => 'nullable|string',
            'alogp_chemspider'                              => 'nullable|string',
            'xlogp_chemspider'                              => 'nullable|string',
            'lowest_p_pnec_qsar'                            => 'nullable|string',
            'species'                                       => 'nullable|string',
            'uncertainty'                                   => 'nullable|string',
            'exposurescore_water_kemi'                      => 'nullable|string',
            'hazscore_ecochronic_kemi'                      => 'nullable|string',
            'validationlevel_kemi'                          => 'nullable|string',
            'prob_of_gc'                                    => 'nullable|string',
            'prob_rplc'                                     => 'nullable|string',
            'pred_chromatography'                           => 'nullable|string',
            'prob_of_both_ionization_source'                => 'nullable|string',
            'prob_ei'                                       => 'nullable|string',
            'prob_esi'                                      => 'nullable|string',
            'pred_ionization_source'                        => 'nullable|string',
            'prob_both_esi_mode'                            => 'nullable|string',
            'prob_plus_esi'                                 => 'nullable|string',
            'prob_minus_esi'                                => 'nullable|string',
            'pred_esi_mode'                                 => 'nullable|string',
            'preferable_platform_by_decision_tree'          => 'nullable|string',
            'synonyms'                                      => 'nullable|string',
            'remark'                                        => 'nullable|string',
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
    try {
        $d->save();
        session()->flash('success', 'The record was succesfully edited.');
        return redirect()->route('susdata.index');
    } catch (Exception $e) {
        session()->flash('failure', $e->getMessage());
        return redirect()->back()->withInput();
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    try {
        Susdata::find($id)->delete();
       // $sus_id->setConnection('mysql_second');
        session()->flash('success', 'The record was deleted');
        return redirect()->route('susdata.index');
    } catch (Exception $e) {
        session()->flash('failure', $e->getMessage());
        return redirect()->back();
    }        
    }

    public function forceDestroy($id)
    {
        try {
            Susdata::withTrashed()->find($id)->forceDelete();
            session()->flash('success', 'The record was permanently deleted');
            return redirect()->route('susdata.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }

    public function restore($id)
    {
        try {
            Susdata::withTrashed()->find($id)->restore();
            session()->flash('success', 'The record restored');
            return redirect()->route('susdata.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }

    public function search(Request $request)
    {
        $id = $request->input('id') ?? array();
        $name = $request->input('name') ?? array();
        $cas_rn = $request->input('cas_rn') ?? array();
        $stdinchikey = $request->input('stdinchikey') ?? array();
        $dtxsid = $request->input('dtxsid') ?? array();

    $sql = [];
    if  ($id) { 
        $value = implode("','", $id); 
        $sql[] .= "id IN ('$value')";
        }
        if  ($name) { 
            $value = implode("','", $name); 
            $sql[] .= "name IN ('$value')";
            }
        if  ($cas_rn) { 
            $value = implode("','", $cas_rn); 
            $sql[] .= "cas_rn IN ('$value')";
            }
        if  ($stdinchikey) { 
            $value = implode("','", $stdinchikey); 
            $sql[] .= "stdinchikey IN ('$value')";
            }
        if  ($dtxsid) { 
            $value = implode("','", $dtxsid); 
            $sql[] .= "dtxsid IN ('$value')";
            }
        if($sql) {
            $query = 'WHERE ' . implode(' AND ', $sql);
        }
        else {
            $query = '';
        }
        $results = \DB::select("SELECT * FROM susdatas $query");        
        
        $id = Susdata::select('id')->distinct()->get();
        $name = Susdata::select('name')->distinct()->get();
        $cas_rn = Susdata::select('cas_rn')->distinct()->get();
        $stdinchikey = Susdata::select('stdinchikey')->distinct()->get();
        $dtxsid = Susdata::select('dtxsid')->distinct()->get();


        return view('user.susdata.searchSusdata', compact('results', 'id', 'name', 'cas_rn', 'stdinchikey', 'dtxsid'));
    }

}
