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

        $this->assertEquals($this->getLocalReviews()['reviews'], $reviews);
    }

    /** @test */
    public function recent_reviews_are_cached()
    {
        // faking a 400 to prevent constant api call
        Http::fake([
            'https://maps.googleapis.com/*' => Http::response([], 400),
        ]);

        $reviews = $this->getRecentReviews();

        $this->assertEquals(cache()->get(CacheKeys::googleReviews()), $reviews);
    }
}
