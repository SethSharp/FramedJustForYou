<?php

namespace Tests\Http\Controllers;

use Tests\TestCase;
use App\Domain\Iam\Models\User;

class ShowDashboardTest extends TestCase
{
    /** @test */
    public function must_be_authenticated(): void
    {
        $this->get(route('dashboard'))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function must_have_role()
    {
        $this->actingAs(User::factory()->create())
            ->get(route('dashboard'))
            ->assertForbidden();
    }

    /** @test */
    public function admin_can_access()
    {
        $this->actingAs(User::factory()->admin()->create())
            ->get(route('dashboard'))
            ->assertOk();
    }

    /** @test */
    public function manager_can_access()
    {
        $this->actingAs(User::factory()->manager()->create())
            ->get(route('dashboard'))
            ->assertOk();
    }
}
