<?php

namespace Tests;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\Traits\RefreshDatabase;
use Tests\Traits\SeedsRoles;

abstract class TestCase extends BaseTestCase
{
    use SeedsRoles;
    use RefreshDatabase;
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();

        $this->seedRoles();

        Carbon::setTestNow(now());
    }
}
