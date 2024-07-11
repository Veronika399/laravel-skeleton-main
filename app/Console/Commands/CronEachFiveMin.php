<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CronEachFiveMin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cron-each-five-min';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cron koji se pokreće svakih 5 minuta.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
