<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * 用户注册
     *
     * @return void
     */
    public function RegisterTest()
    {
        // $this->withoutExceptionHandling();
        $response = $this->post('/api/register', [
            'email' => 'test@example.com',
            'password' => '123456'
        ]);

        $response->assertStatus(201);
    }
}
