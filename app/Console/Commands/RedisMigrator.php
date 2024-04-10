<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Predis\Client;
use Illuminate\Support\Facades\DB;

class RedisMigrator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:migrate {table_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate a table to Redis database.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $tableName = $this->argument('table_name');

        $client = new Client();

        // Získajte záznamy z tabuľky po menších blokoch s implicitným usporiadaním podľa primárneho kľúča
        DB::table($tableName)->orderBy('id')->chunk(300, function ($records) use ($client) {
            foreach ($records as $record) {
                $jsonData = json_encode($record);
                $path = ".";
                $client->jsonset($record->id, $path, $jsonData);
            }
        });

        $this->info('Table ' . $tableName . ' has been migrated to Redis.');
    }
}