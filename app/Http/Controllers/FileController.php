<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Sars;
use Spatie\SimpleExcel\SimpleExcelReader;

class FileController extends Controller
{
    public function index() {
            $files = File::with('sars')->get();
           
            //dd($files);
            return view('sars.fileUpload', compact('files'));
    }
    
    public function store(Request $request) {
        $request->validate([
            'files' => 'required',
            'files.*' => 'required|mimes:csv,txt,xlx,xls,pdf,xlsx|max:2048'
            ]);
            $files = [];
            if ($request->file('files')) {
                foreach ($request->file('files') as $key => $file) {
                    $name=$file->getclientOriginalName();
                    $filename=date('Ymd_His_').$name;
                    $file->move(public_path('uploads'), $filename);
                    $files[]['name']=$filename;
                }

            }
            foreach ($files as $key => $file) {
                File::create($file);
            }
            return back()->with('success', 'The file was successfully uploaded.');
        }
        
        public function showExcel(Request $request)
        {
          
            $items[] = 'type_of_data';
            $items[] = 'data_provider';
            $items[] = 'contact_person';
            $items[] = 'address_of_contact';
            $items[] = 'email';
            $items[] = 'laboratory';
            $items[7] = 'name_of_country';
            $items[] = 'name_of_city';
            $items[] = 'station_name';
            $items[] = 'national_code';
            $items[] = 'relevant_ec_code_wise';
            $items[] = 'relevant_ec_code_other';
            $items[] = 'other_code';
            $items[] = 'latitude';
            $items[] = 'latitude_d';
            $items[] = 'latitude_m';
            $items[] = 'latitude_s';
            $items[] = 'latitude_decimal';
            $items[] = 'longitude';
            $items[] = 'longitude_d';
            $items[] = 'longitude_m';
            $items[] = 'longitude_s';
            $items[] = 'longitude_decimal';
            $items[] = 'altitude';
            $items[] = 'design_capacity';
            $items[] = 'population_served';
            $items[] = 'catchment_size';
            $items[] = 'gdp';
            $items[] = 'people_positive';
            $items[] = 'people_recovered';
            $items[] = 'people_positive_past';
            $items[] = 'people_recovered_past';
            $items[34] = 'sample_matrix';
            $items[] = 'sample_from_hour';
            $items[] = 'sample_from_day';
            $items[] = 'sample_from_month';
            $items[] = 'sample_from_year';
            $items[] = 'sample_to_hour';
            $items[] = 'sample_to_day';
            $items[] = 'sample_to_month';
            $items[] = 'sample_to_year';
            $items[] = 'type_of_sample';
            $items[] = 'type_of_composite_sample';
            $items[] = 'sample_interval';
            $items[] = 'flow_total';
            $items[] = 'flow_minimum';
            $items[] = 'flow_maximum';
            $items[] = 'temperature';
            $items[] = 'cod';
            $items[] = 'total_n_nh4_n';
            $items[] = 'tss';
            $items[] = 'dry_weather_conditions';
            $items[] = 'last_rain_event';
            $items[56] = 'associated_phenotype';
            $items[] = 'genetic_marker';
            $items[] = 'date_of_sample_preparation';
            $items[] = 'storage_of_sample';
            $items[] = 'volume_of_sample';
            $items[] = 'internal_standard_used1';
            $items[] = 'method_used_for_sample_preparation';
            $items[] = 'date_of_rna_extraction';
            $items[] = 'method_used_for_rna_extraction';
            $items[] = 'internal_standard_used2';
            $items[] = 'rna1';
            $items[] = 'rna2';
            $items[] = 'replicates1';
            $items[] = 'analytical_method_type';
            $items[] = 'analytical_method_type_other';
            $items[] = 'date_of_analysis';
            $items[] = 'lod1';
            $items[] = 'lod2';
            $items[] = 'loq1';
            $items[] = 'loq2';
            $items[] = 'uncertainty_of_the_quantification';
            $items[] = 'efficiency';
            $items[] = 'rna3';
            $items[] = 'pos_control_used';
            $items[] = 'replicates2';
            $items[] = 'ct';
            $items[] = 'gene1';
            $items[] = 'gene2';
            $items[] = 'comment';
            // Retrieve the selected files
            /*dd($request->file);*/
            $id_file = $request->file;
            $files=$request['files'];
            foreach ($files as $f) {
            $file = File::find($f);
            $path = base_path().'/public/uploads/'.$file->name;
           
                $rows = SimpleExcelReader::create($path)->skip(7)->take(88)->noHeaderRow()->getRows();
                $data = [];
                foreach($rows as $key => $r) {
                 //   foreach($items as $key => $item) {
                    if (isset($items[$key])) 
                        $data[$items[$key]] = ($r[3] ? $r[3] : '');

            //}
                }
                $data['sars_save']=1;
                $data['file_id']=$f;
                $data['sars_source_dir']='';
                $data['longitude_decimal_show']='';
                $data['latitude_decimal_show']='';
                $data['noexport']='';
              // dd($data);
                Sars::insert($data); 
            }
            return back()->with('success', 'The file was uploaded to database.');
                // dd($data);
        
            // Do something with the selected files
        }

        public function destroy(File $id)
    {
        File::find($id)->delete();

        return back()->with('success', 'The file was deleted.');
    }
}
