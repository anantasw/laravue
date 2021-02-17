<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\User;

class QuoteApiTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRefreshQuote()
    {
        $user = User::first();
        $token = \JWTAuth::fromUser($user);

        $payload = [
            'headers' => [
                'accept' => 'application/json',
                'Authorization' => 'Bearer '.$token
            ]
        ];

        $response = $this->actingAs($user, 'api');

        $response->json('GET', '/api/v1/quote', $payload)->assertStatus(200);;

        $this->withoutExceptionHandling();
    }
}
