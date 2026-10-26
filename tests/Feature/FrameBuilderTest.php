<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Support\FrameQuote;

class FrameBuilderTest extends TestCase
{
    public function test_page_renders(): void
    {
        $this->get('/frame-builder')->assertOk()->assertSee('Frame Builder');
    }

    public function test_quote_is_calculated(): void
    {
        $response = $this->getJson('/frame-builder/quote?moulding=BLK-20&width=40&height=30&mat=0')->assertOk();

        $expected = FrameQuote::calculate('BLK-20', 40, 30, false);
        $this->assertSame($expected['total'], (float) $response->json('total'));
        $this->assertSame(0.0, (float) $response->json('breakdown.mat'));
        $this->assertGreaterThan(0, $expected['total']);
    }

    public function test_quote_rejects_bad_input(): void
    {
        $this->getJson('/frame-builder/quote?moulding=NOPE&width=40&height=30')->assertStatus(422);
        $this->getJson('/frame-builder/quote?moulding=BLK-20&width=1&height=30')->assertStatus(422);
    }
}
