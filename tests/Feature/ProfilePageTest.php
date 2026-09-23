<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfilePageTest extends TestCase
{
    public function test_profile_page_returns_successful_response(): void
    {
        $response = $this->get('/profile');

        $response->assertStatus(200);
    }
}
