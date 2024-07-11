<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CronHourly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cron-hourly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cron koji se pokreće svakih sat vremena.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
