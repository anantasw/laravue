<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\User;

class AuthApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $credentials = [
            'email' => 'abhisena@gmail.com',
            'password' => 'abhisena@gmail.com'
        ];

        $response = $this->json('POST', '/api/v1/login', $credentials);

        $this->withoutExceptionHandling();
        $response->assertStatus(200);
    }

    public function testCheckToken()
    {
        $user = User::first();
        $token = \JWTAuth::fromUser($user);

        $payload = [
            'token' => $token
        ];

        $response = $this->actingAs($user, 'api');
        $response->json('POST', '/api/v1/check_token', $payload)->assertStatus(200);;

        $this->withoutExceptionHandling();
    }

    public function testLogout()
    {
        $user = User::first();
        $token = \JWTAuth::fromUser($user);

        $payload = [
            'token' => $token
        ];

        $response = $this->actingAs($user, 'api');
        $response->json('POST', '/api/v1/logout', $payload)->assertStatus(200);;

        $this->withoutExceptionHandling();
    }


}
