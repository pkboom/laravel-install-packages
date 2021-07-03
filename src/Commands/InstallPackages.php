<?php

namespace Pkboom\InstallPackages\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class InstallPackages extends Command
{
    protected $signature = 'install:packages {--optional}';

    public function handle()
    {
        if ($this->option('optional')) {
            $packages = $this->choice(
                question: 'Which package?(multiple)',
                choices: collect(config('packages.optional'))->toArray(),
                multiple: true,
            );
        } else {
            $packages = config('packages.default');
        }

        collect($packages)->each(function ($package) {
            $this->install($package);
        });

        return 0;
    }

    public function install($package)
    {
        $this->info("Installing {$package}");

        $process = Process::fromShellCommandline("composer require {$package}");

        $process->run(function ($type, $buffer) {
            $this->line($buffer);
        });
    }
}
