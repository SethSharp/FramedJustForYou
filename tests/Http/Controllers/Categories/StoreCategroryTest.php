<?php

namespace Tests\Http\Controllers\Categories;


use App\Domain\Files\Models\File;
use App\Domain\Iam\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class StoreCategroryTest extends TestCase
{
    /** @test */
    public function must_be_authenticated()
    {
        $this->post(route('categories.store'))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function must_be_admin_or_manager()
    {
        $this->actingAs(User::factory()->create())
            ->postJson(route('categories.store'), [])
            ->assertForbidden();
    }

    /** @test */
    public function file_must_be_image()
    {
        $this->actingAs(User::factory()->admin()->create())
            ->postJson(route('categories.store'), [
                'name' => 'Some category',
                'description' => 'Some description',
                'file' => 12345
            ])
            ->assertJsonValidationErrors([
                'file' => 'The file field must be an image.'
            ]);
    }

    /** @test */
    public function can_store_category()
    {
        Storage::fake();

        $file = UploadedFile::fake()->image('file.jpg');

        $this->actingAs(User::factory()->admin()->create())
            ->postJson(route('categories.store'), [
                'name' => 'Some category',
                'description' => 'Some description',
                'file' => $file
            ])
            ->assertRedirect()
            ->assertSessionHas('success', 'Successfully created new category!');

        $file = File::first();

        $this->assertDatabaseHas('categories', [
            'name' => 'Some category',
            'description' => 'Some description',
            'file_id' => $file->id
        ]);
    }
}
