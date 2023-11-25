<?php

namespace App\Console\Commands\Bootstrap;

use App\Domain\Iam\Actions\SyncRolesAction;
use Illuminate\Console\Command;
use Spatie\Multitenancy\Commands\Concerns\TenantAware;

class Roles extends Command
{
    protected $signature = 'bootstrap:roles';
    protected $description = 'Set up roles table';

    public function handle(SyncRolesAction $action): void
    {
        $this->line('bootstrapping roles...');
        $action();
    }
}
