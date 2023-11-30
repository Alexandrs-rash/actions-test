<?php

namespace Tests\Feature;

use Tests\TestCase;
use Inertia\Testing\AssertableInertia as Assert;
class PlaceTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_user_can_view_places(): void
    {
        $response = $this->get('/places');
        $response->assertStatus(200);
        $response->assertInertia(fn(Assert $page) => $page
            ->component('Place/Index')
            ->has('places.data')
        );
    }
}
