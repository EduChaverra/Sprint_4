<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckDatabaseConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:check-connection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check the database connection';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            DB::connection()->getPdo();
            $this->info('Successfully connected to the database.');
        } catch (\Exception $e) {
            $this->error('Could not connect to the database. Please check your configuration.');
            $this->error($e->getMessage());
        }
    }
}