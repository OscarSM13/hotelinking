<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
    }

    public function testCupones()
    {
        $response = $this->get(route('cupones'));

        $response->assertStatus(200);
    }

    public function testLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
