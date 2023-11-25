<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Console\Commands\Bootstrap\Roles;

class Bootstrap extends Command
{
    protected $signature = 'bootstrap';
    protected $description = 'Bootstrap all the things';

    public function handle(): void
    {
        $this->call(Roles::class);
    }
}
