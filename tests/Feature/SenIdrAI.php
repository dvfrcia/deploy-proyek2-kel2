<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SenIdrAI extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_home(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    
    public function test_profile(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_event(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_digital_archive(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
