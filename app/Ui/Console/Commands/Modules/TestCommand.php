<?php

namespace Ui\Console\Commands\Modules;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'haha:hoho';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test command module command';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        dd("ok");
    }
}
