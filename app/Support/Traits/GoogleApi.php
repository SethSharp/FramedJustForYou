<?php

namespace App\Support\Traits;

use App\Support\CacheKeys;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

trait GoogleApi
{
    public function getRecentReviews(): Collection
    {
        if (app()->environment('local') || is_null(config('app.google_place_id'))) {
            return collect($this->getLocalReviews()['reviews'])->sortByDesc('rating')->take(3)->values();
        }

        return cache()->remember(CacheKeys::googleReviews(), (24 * 60) * 7, fn () => collect($this->retrieveReviews())->sortByDesc('rating')->take(3)->values());
    }

    protected function getLocalReviews(): array
    {
        return  [
            'reviews' => [
                [
                    "author_name" => "Tony Sowter",
                    "author_url" => "https://www.google.com/maps/contrib/116044518142124566028/reviews",
                    "language" => "en",
                    "original_language" => "en",
                    "profile_photo_url" => "https://lh3.googleusercontent.com/a/ACg8ocLH20OM3TGkVCoqppDBrbBe1JTwt18WbsAjfCV82amI=s128-c0x00000000-cc-rp-mo",
                    "rating" => 5,
                     "relative_time_description" => "2 months ago",
                    "text" => "Great service and very friendly. Nice fish also.",
                    "time" => 1702885837,
                    "translated" => false
                ],
                [
                    "author_name" => "D S",
                    "author_url" => "https://www.google.com/maps/contrib/115920777016598339648/reviews",
                    "language" => "en",
                    "original_language" => "en",
                    "profile_photo_url" => "https://lh3.googleusercontent.com/a/ACg8ocKjhVHK0JQQpK8W6mHTklT6SRCxUr5hPWXCrHehZvqq=s128-c0x00000000-cc-rp-mo",
                    "rating" => 5,
                    "relative_time_description" => "3 months ago",
                    "text" => "Highly professional and efficient service that were very accommodating in meeting our time”frames.” Thank you",
                    "time" => 1701765638,
                    "translated" => false,
                ],
                [
                    "author_name" => "Davo240",
                    "author_url" => "https://www.google.com/maps/contrib/113912016359924383519/reviews",
                    "language" => "en",
                    "original_language" => "en",
                    "profile_photo_url" => "https://lh3.googleusercontent.com/a-/ALV-UjXqv47gbg-QJ9O1pqiWoVE1Q9nsktRYOXXCydlFNV1ZbA=s128-c0x00000000-cc-rp-mo-ba4",
                    "rating" => 5,
                    "relative_time_description" => "3 months ago",
                    "text" => "This is the only framing store we use, and have been for 20 years.",
                    "time" => 1701547627.,
                    "translated" => false,
                ],
                [
                    "author_name" => "Aaron Fozzard",
                    "author_url" => "https://www.google.com/maps/contrib/111282824660888720107/reviews",
                    "language" => "en",
                    "original_language" => "en",
                    "profile_photo_url" => "https://lh3.googleusercontent.com/a-/ALV-UjWiXccj9e8Up_KPpZDT6mRy1TO3jgjgJixGsELwTpGWW1pS=s128-c0x00000000-cc-rp-mo-ba4",
                    "rating" => 5,
                    "relative_time_description" => "4 months ago",
                    "text" => "Absolutely brilliant service! A great Gold Coast service provider. I'll be back in future when I need other special items framed",
                    "time" => 1698211286,
                    "translated" => false,
                ],
                [
                    "author_name" => "Shannon ELLEMS",
                    "author_url" => "https://www.google.com/maps/contrib/114923384328287712720/reviews",
                    "language" => "en",
                    "original_language" => "en",
                    "profile_photo_url" => "https://lh3.googleusercontent.com/a-/ALV-UjVHeC9xk9RHrgoLra1TqvvEb2DU0dnVFQ6fg_JwpD-ZRg=s128-c0x00000000-cc-rp-mo",
                    "rating" => 5,
                    "relative_time_description" => "5 months ago",
                    "text" => "Di and her team did a wonderful job on framing T shirt and wedding photo! Beautifully and professionally done ✔️ Thankyou",
                    "time" => 1694948001,
                    "translated" => false,
                ]
            ]
        ];
    }

    protected function retrieveReviews(): array
    {
        $apiUrl = 'https://maps.googleapis.com/maps/api/place/details/json';

        $queryParams = [
            'place_id' => config('app.google_place_id'),
            'fields' => 'reviews',
            'reviews_sort' => 'newest',
            'key' => config('app.google_api')
        ];

        $response = Http::get($apiUrl, $queryParams);

        if ($response->status() === 200) {
            return $response->json()['result']['reviews'];
        }

        return $this->getLocalReviews()['reviews'];
    }
}
