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

        // Získajte záznamy z tabuľky
        $records = DB::table($tableName)->get();

        // Vložte záznamy do Redis
        foreach ($records as $record) {
        $client->hmset($record->id, get_object_vars($record));
        }

        $this->info('Table ' . $tableName . ' has been migrated to Redis.');
    }
}