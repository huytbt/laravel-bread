<?php

namespace PhpSoft\Bread\Console\Commands;

use Illuminate\Console\Command;

class MakeResource extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:resource';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a BREAD resource';

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
        //
    }
}
