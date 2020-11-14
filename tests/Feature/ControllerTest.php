<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHello()
    {
        $response = $this->get('/hello');

        $response->assertStatus(200)->assertJson(['hello' => 'world']);
    }

    public function testContribution()
    {
        $response = $this->get('/contributions');
        $response->assertStatus(200);
    }

    public function testFakeContribution()
    {
        $response = $this->get('/contributions/fake');
        $response->assertStatus(404);
    }

    public function testOOPContribution()
    {
        $response = $this->get('/contributions/OOP');
        $response->assertStatus(200);
    }
}
