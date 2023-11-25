<?php

namespace App\Console\Commands;

use App\Console\Commands\Bootstrap\Roles;
use Illuminate\Console\Command;

class Bootstrap extends Command
{
    protected $signature = 'bootstrap';
    protected $description = 'Bootstrap all the things';

    public function handle(): void
    {
        $this->call(Roles::class);
    }
}
