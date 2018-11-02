<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearCacheOutsideTheCLI extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'muie:psd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \Route::get('/clear-cache', function() {
            $exitCode = Artisan::call('cache:clear');
            // return what you want
        });
    }
}
