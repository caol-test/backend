<?php

namespace Tests\Feature;

use App\Services\JwtService;
use Mockery\MockInterface;
use Tests\TestCase;

class GetJwtTest extends TestCase
{
    public function test_jwt_endpoint_returns_success()
    {
        $this->mock(JwtService::class, function (MockInterface $mock) {
            $mock->shouldReceive('getNewToken')
                ->once()
                ->andReturn('header.body.footer');
        });

        $response = $this->get('/api/jwt');

        $response->assertJsonPath('data.jwt', 'header.body.footer');
    }
}
