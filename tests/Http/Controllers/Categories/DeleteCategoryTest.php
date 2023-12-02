<?php

namespace Tests\Http\Controllers\Categories;

use Tests\TestCase;
use App\Domain\Iam\Models\User;
use App\Domain\Categories\Models\Category;

class DeleteCategoryTest extends TestCase
{
    protected Category $category;

    protected function setUp(): void
    {
        parent::setUp();

        $this->category = Category::factory()->create();
    }

    /** @test */
    public function must_be_authenticated()
    {
        $this->delete(route('categories.delete', $this->category))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function must_be_admin_or_manager()
    {
        $this->actingAs(User::factory()->create())
            ->delete(route('categories.delete', $this->category), [])
            ->assertForbidden();
    }

    /** @test */
    public function can_delete_category()
    {
        $this->actingAs(User::factory()->admin()->create())
            ->delete(route('categories.delete', $this->category))
            ->assertRedirect()
            ->assertSessionHas('success', 'Successfully deleted category!');

        $this->assertDatabaseMissing('categories', [
            'name' => 'Some category',
        ]);
    }
}
