<?php

namespace Tests\Feature;

use App\Repositories\JwtRepository;
use App\Services\UserService;
use Illuminate\Support\Collection;
use Mockery\MockInterface;
use Tests\TestCase;

class JwtMiddlewareTest extends TestCase
{
    public function test_get_consultants_with_invalid_token_does_not_succeed()
    {
        $response = $this->get('/api/users/consultants');

        $response->assertJsonPath('success', false);
    }

    public function test_get_consultants_with_valid_token_returns_collection()
    {
        $this->mock(UserService::class, function (MockInterface $mock) {
            $mock->shouldReceive('getConsultants')->once()->andReturn(new Collection());
        });

        $this->mock(JwtRepository::class, function (MockInterface $mock) {
            $mock->shouldReceive('exists')->once()->andReturn(true);
        });

        $jwt = $this->getJwt();

        $response = $this->get('/api/users/consultants', [
            'Authorization' => "Bearer $jwt"
        ]);

        $response->assertJsonPath('success', true);
    }
}
