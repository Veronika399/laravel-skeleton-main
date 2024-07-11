<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CronEachMin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cron-each-min';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cron koji se pokreće svaku minutu.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
