<?php

namespace Balintcodes\LaravelEnumSyncTool\Commands;

use Illuminate\Console\Command;

class LaravelEnumSyncToolCommand extends Command
{
    public $signature = 'laravel-enum-sync-tool';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
