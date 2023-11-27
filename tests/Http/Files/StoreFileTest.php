<?php

namespace Tests\Http\Files;

use Tests\TestCase;
use App\Domain\Iam\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class StoreFileTest extends TestCase
{
    /** @test */
    public function can_store_file()
    {
        Storage::fake();

        $user = User::factory()->create();

        $file = UploadedFile::fake()->image('file.jpg');

        $this->actingAs($user)
            ->post(route('file.store'), [
                'file' => $file
            ])
            ->assertSessionHasNoErrors()
            ->assertRedirect();

        Storage::assertExists($file->hashName('development/products'));
    }
}
