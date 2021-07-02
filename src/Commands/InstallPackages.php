<?php

namespace Pkboom\InstallPackages\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class InstallPackages extends Command
{
    protected $signature = 'package:install {--optional}';

    public function handle()
    {
        if ($this->option('optional')) {
            $packages = collect(config('packages.optional'))->toArray();

            $package = $this->choice('Which package?', $packages);

            $this->install($package);

            return 0;
        }

        collect(config('packages.default'))
            ->each(function($package) {
                $this->install($package);
            });

        return 0;
    }

    public function install($package)
    {
        $this->info("Installing {$package}");

        $process =  Process::fromShellCommandline("composer require {$package}");
        
        $process->run(function ($type, $buffer) {
            $this->line($buffer);
        });

    }
}
