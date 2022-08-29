<?php

namespace IsaacPawley\ModuleSandpit\Commands;

use Illuminate\Console\Command;

class ModuleSandpitCommand extends Command
{
    public $signature = 'module-sandpit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
