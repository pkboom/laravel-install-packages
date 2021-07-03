<?php

namespace Pkboom\InstallPackages\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class RemovePackages extends Command
{
    protected $signature = 'remove:packages';

    public function handle()
    {
        $packages = $this->choice(
            question: 'Which package?(multiple)',
            choices: collect(config('packages.optional'))->toArray(),
            multiple: true,
        );

        collect($packages)->each(function ($package) {
            $this->remove($package);
        });

        return 0;
    }

    public function remove($package)
    {
        $this->info("Removeing {$package}");

        $process = Process::fromShellCommandline("composer remove {$package}");

        $process->run(function ($type, $buffer) {
            $this->line($buffer);
        });
    }
}
