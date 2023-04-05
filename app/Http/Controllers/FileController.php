<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function index() {
        return view('sars.fileUpload');
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
            // Retrieve the selected files
           
            $files = File::all();
            return view('sars.fileUpload', compact('files'));
            
            // Do something with the selected files
        }
}
