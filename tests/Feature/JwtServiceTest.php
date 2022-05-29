<?php

namespace Tests\Feature;

use App\Repositories\JwtRepository;
use App\Services\JwtService;
use Tests\TestCase;

class JwtServiceTest extends TestCase
{
    public function test_jwt_service_returns_proper_value()
    {
        $jwtRepository = $this->createMock(JwtRepository::class);
        $jwtService = new JwtService($jwtRepository);
        $jwt = $jwtService->getNewToken();

        self::assertNotNull($jwt);
    }
}
