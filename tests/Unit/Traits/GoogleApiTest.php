<?php

namespace Tests\Unit\Traits;

use Tests\TestCase;
use App\Support\CacheKeys;
use App\Support\Traits\GoogleApi;
use Illuminate\Support\Facades\Http;

class GoogleApiTest extends TestCase
{
    use GoogleApi;

    /** @test */
    public function handles_a_non_200()
    {
        Http::fake([
            'https://maps.googleapis.com/*' => Http::response([], 400),
        ]);

        $reviews = $this->getRecentReviews();

        $expected = collect($this->getLocalReviews()['reviews'])->sortByDesc('rating')->take(3)->values();

        $this->assertEquals($expected, $reviews);
    }

    /** @test */
    public function recent_reviews_are_cached()
    {
        $this->markTestIncomplete();
        // faking a 400 to prevent constant api call
        Http::fake([
            'https://maps.googleapis.com/*' => Http::response([], 400),
        ]);

        $reviews = $this->getRecentReviews();

        $this->assertEquals(cache()->get(CacheKeys::googleReviews()), $reviews);
    }
}
