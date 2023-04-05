<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\SimpleExcel\SimpleExcelReader;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = base_path().'/public/NORMAN Data File SRAS-CoV-2_20200722.xlsx';
        $rows = SimpleExcelReader::create($path)->skip(11)->take(5)->noHeaderRow()->getRows();
        $p = [];
    foreach($rows as $r) {
        $p[] = [
        '' => $r[''],
        '' => $r[''],
        '' => $r[''],
        '' => $r[''],
        ];
    }
        DB::norman('sars')->insert($p); 
    }
}
