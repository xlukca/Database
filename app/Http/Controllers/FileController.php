<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Spatie\SimpleExcel\SimpleExcelReader;

class FileController extends Controller
{
    public function index() {
            $files = File::all();
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
            $items = array('type_of_data'=>8,'data_provider'=>9);
            // Retrieve the selected files
            /*dd($request->file);*/
            $id_file = $request->file;
            $file = File::find($id_file);
            $path = base_path().'/public/uploads/'.$file->name;
            foreach($items as $key => $item) {
                $row = SimpleExcelReader::create($path)->skip($item)->take(5)->noHeaderRow()->getRows();
                $data = [];
                foreach($row as $r) {

                $data[$key][] = $r[3];
                
                }
                dd($data);
            }
            // return view('sars.fileUpload', compact('files'));
            
            // Do something with the selected files
        }
}
