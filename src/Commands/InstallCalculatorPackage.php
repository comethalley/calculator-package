<?php

namespace Comethalley\CalculatorPackage\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCalculatorPackage extends Command
{
    protected $signature = 'calculator:install';

    protected $description = "Install the Calculator Package :)";

    public function handle()
    {
        $this->info('Installing Calculator Package...');

        $this->info('Publishing configuration...');
        $this->publishConfiguration();
        $this->info('Published configuration');


        $this->info('Installed BlogPackage');
    }

    private function configExists($fileName)
    {
        return File::exist(config_path($fileName));
    }

    private function shouldOverwriteConfig()
    {
        return $this->confirm('Config file already exist. Do you want to override it?', false);
    }

    private function publishConfiguration()
    {
        $this->call('vendor:publish', ['--tag' => 'calculator-package']);
    }
}
